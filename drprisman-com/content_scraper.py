import os
import requests
from bs4 import BeautifulSoup
import html2text
from urllib.parse import urlparse
import glob
import time  # Add this import

# Configure HTML-to-Markdown
h = html2text.HTML2Text()
h.ignore_links = False
h.ignore_images = True
h.body_width = 0

# Add browser-like headers to avoid bot detection
HEADERS = {
    'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36',
    'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
    'Accept-Language': 'en-US,en;q=0.5',
    'Connection': 'keep-alive',
    'Upgrade-Insecure-Requests': '1',
    'Sec-Fetch-Dest': 'document',
    'Sec-Fetch-Mode': 'navigate',
    'Sec-Fetch-Site': 'none',
    'Sec-Fetch-User': '?1',
}

urls = [
"http://www.drprisman.com/",
"http://www.drprisman.com/contact-us.php",
"http://www.drprisman.com/about-us.php",
"http://www.drprisman.com/services.php"
]

def url_to_filename(url):
    parsed = urlparse(url)
    path = parsed.path.strip('/').replace('/', '_') or 'index'
    return f"{path}.md"

# Scrape individual pages
for url in urls:
    try:
        # Add delay between requests
        time.sleep(1)  # Wait 1 second between requests
        
        # Use headers and add timeout
        response = requests.get(url, headers=HEADERS, timeout=15)
        
        # Check for 403 specifically
        if response.status_code == 403:
            print(f"403 Forbidden: {url} - Trying alternative method...")
            # Try with different user agent
            alt_headers = HEADERS.copy()
            alt_headers['User-Agent'] = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15'
            response = requests.get(url, headers=alt_headers, timeout=15)
        
        response.raise_for_status()  # Will throw exception for 4xx/5xx errors
        
        soup = BeautifulSoup(response.text, 'html.parser')
        
        # Try different content selectors if needed
        main_content = soup.find('main') or soup.find('div', class_='content') or soup.body
        
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

with open('1-combined_content.md', 'w', encoding='utf-8') as outfile:
    for fname in filenames:
        try:
            with open(fname, 'r', encoding='utf-8') as infile:
                outfile.write(infile.read())
                outfile.write('\n\n')  # Add separation between files
        except FileNotFoundError:
            print(f"Skipping {fname} (not found)")
print("Successfully created 1-combined_content.md")