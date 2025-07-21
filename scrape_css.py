import os
import requests
from bs4 import BeautifulSoup
from urllib.parse import urljoin, urlparse
import re
from time import sleep

url = "https://oceansidepsychology.com/"  # Replace with the target URL
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'}

try:
    response = requests.get(url, headers=headers, timeout=10)
    response.raise_for_status()  # Raise error for bad status
except requests.exceptions.RequestException as e:
    print(f"Failed to fetch page: {e}")
    exit()

soup = BeautifulSoup(response.text, 'html.parser')

# Create output directory
domain = urlparse(url).netloc.replace("www.", "")
os.makedirs(f"{domain}_css", exist_ok=True)

# Track downloaded files to avoid duplicates
downloaded = set()

# Extract external CSS
for i, link in enumerate(soup.find_all("link", rel="stylesheet")):
    try:
        css_href = link.get("href", "").strip()
        if not css_href:
            continue
            
        css_url = urljoin(url, css_href)
        
        # Skip duplicates
        if css_url in downloaded:
            continue
        downloaded.add(css_url)
        
        # Get filename from URL
        path = urlparse(css_url).path
        filename = os.path.basename(path) or "styles.css"
        filename = re.sub(r'[^a-zA-Z0-9\._-]', '_', filename)
        
        # Handle duplicate filenames
        if os.path.exists(f"{domain}_css/{filename}"):
            filename = f"{i}_{filename}"
            
        # Fetch CSS
        css_response = requests.get(css_url, headers=headers, timeout=10)
        css_response.raise_for_status()
        
        # Save to file
        with open(f"{domain}_css/{filename}", "w", encoding="utf-8") as f:
            f.write(css_response.text)
        print(f"Saved: {filename}")
        
        sleep(0.5)  # Be polite to servers
        
    except Exception as e:
        print(f"Error processing {css_url}: {str(e)}")

# Extract internal CSS
for i, style in enumerate(soup.find_all("style")):
    try:
        css_content = style.string or ""
        if css_content:
            filename = f"internal_{i+1}.css"
            with open(f"{domain}_css/{filename}", "w", encoding="utf-8") as f:
                f.write(css_content)
            print(f"Saved: {filename}")
    except Exception as e:
        print(f"Error saving internal CSS: {str(e)}")

print("\nCSS extraction complete!")