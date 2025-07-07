import os
import requests
from bs4 import BeautifulSoup
import html2text
from urllib.parse import urlparse
import glob  # Add this import

# Configure HTML-to-Markdown
h = html2text.HTML2Text()
h.ignore_links = False
h.ignore_images = True
h.body_width = 0

urls = [
    "http://heddenchong.com/",
    "http://heddenchong.com/news/",
    "http://heddenchong.com/contact/",
    "http://heddenchong.com/our-team/",
    "http://heddenchong.com/client-portal/",
    "http://heddenchong.com/resources/",
    "http://heddenchong.com/services/",
    "http://heddenchong.com/our-team/andrew-young/",
    "http://heddenchong.com/our-team/ken-pawluk/",
    "http://heddenchong.com/our-team/tom-rogic/",
    "http://heddenchong.com/our-team/nicole-moore/",
    "http://heddenchong.com/our-team/ivano-cristante/",
    "http://heddenchong.com/our-team/foo-chan/"
]

def url_to_filename(url):
    parsed = urlparse(url)
    path = parsed.path.strip('/').replace('/', '_') or 'index'
    return f"{path}.md"

# Scrape individual pages
for url in urls:
    try:
        response = requests.get(url, timeout=10)
        response.raise_for_status()
        soup = BeautifulSoup(response.text, 'html.parser')
        main_content = soup.find('main') or soup.body
        markdown_content = h.handle(str(main_content))
        title = soup.title.string.strip() if soup.title else "Untitled"
        header = f"# {title}\n\n**Source URL**: {url}\n\n---\n\n"
        full_md = header + markdown_content
        filename = url_to_filename(url)
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(full_md)
        print(f"Saved: {filename}")
    except Exception as e:
        print(f"Failed to process {url}: {str(e)}")

# Combine files (new section)
filenames = [url_to_filename(url) for url in urls]

with open('combined_content.md', 'w', encoding='utf-8') as outfile:
    for fname in filenames:
        try:
            with open(fname, 'r', encoding='utf-8') as infile:
                outfile.write(infile.read())
                outfile.write('\n\n')  # Add separation between files
        except FileNotFoundError:
            print(f"Skipping {fname} (not found)")
print("Successfully created combined_content.md")