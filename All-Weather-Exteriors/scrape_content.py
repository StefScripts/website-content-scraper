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
"https://www.allweatherexteriors.ca/",
"https://www.allweatherexteriors.ca/roofing-services-in-garden-city-winnipeg/",
"https://www.allweatherexteriors.ca/areas-we-serve-winnipeg/",
"https://www.allweatherexteriors.ca/blog/",
"https://www.allweatherexteriors.ca/roofing-services-in-north-kildonan-winnipeg/",
"https://www.allweatherexteriors.ca/roofing-services-in-west-end-winnipeg/",
"https://www.allweatherexteriors.ca/roofing-services-in-crescentwood-winnipeg/",
"https://www.allweatherexteriors.ca/roofing-services-in-st-james/",
"https://www.allweatherexteriors.ca/roofing-services-in-st-boniface/",
"https://www.allweatherexteriors.ca/roofing-services-in-transcona-winnipeg/",
"https://www.allweatherexteriors.ca/winnipeg-roofing-estimate/",
"https://www.allweatherexteriors.ca/contact-us/",
"https://www.allweatherexteriors.ca/residential-and-commercial-painting/",
"https://www.allweatherexteriors.ca/winnipeg-roofers-testimonials/",
"https://www.allweatherexteriors.ca/roofing/",
"https://www.allweatherexteriors.ca/about-us/",
"https://www.allweatherexteriors.ca/projects/",
"https://www.allweatherexteriors.ca/siding/",
"https://www.allweatherexteriors.ca/winnipeg-roofing-questions-faqs/",
"https://www.allweatherexteriors.ca/roofing-information/",
"https://www.allweatherexteriors.ca/careers/",
"https://www.allweatherexteriors.ca/check-if-roofer-is-properly-insured/",
"https://www.allweatherexteriors.ca/amazing-and-trending-roof-colors/",
"https://www.allweatherexteriors.ca/effective-asphalt-roof-repair/",
"https://www.allweatherexteriors.ca/low-pitched-roofs-guide/",
"https://www.allweatherexteriors.ca/how-to-fix-shingles/",
"https://www.allweatherexteriors.ca/roof-flashing-its-role-and-importance/"
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