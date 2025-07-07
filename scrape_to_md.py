import os
import requests
from bs4 import BeautifulSoup
import html2text
from urllib.parse import urlparse

# Configure HTML-to-Markdown converter
h = html2text.HTML2Text()
h.ignore_links = False          # Preserve hyperlinks
h.ignore_images = True          # Exclude images (simplify content)
h.body_width = 0                # Prevent line breaks

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
    """Convert URL to safe filename"""
    parsed = urlparse(url)
    path = parsed.path.strip('/').replace('/', '_') or 'index'
    return f"{path}.md"

for url in urls:
    try:
        # Fetch HTML content
        response = requests.get(url, timeout=10)
        response.raise_for_status()  # Check for HTTP errors
        
        # Parse HTML and extract main content
        soup = BeautifulSoup(response.text, 'html.parser')
        main_content = soup.find('main') or soup.body  # Focus on <main> or fallback to <body>
        
        # Convert to Markdown
        markdown_content = h.handle(str(main_content))
        
        # Add metadata header
        title = soup.title.string.strip() if soup.title else "Untitled"
        header = f"# {title}\n\n**Source URL**: {url}\n\n---\n\n"
        full_md = header + markdown_content
        
        # Save to file
        filename = url_to_filename(url)
        with open(filename, 'w', encoding='utf-8') as f:
            f.write(full_md)
        print(f"Saved: {filename}")
        
    except Exception as e:
        print(f"Failed to process {url}: {str(e)}")