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
"https://www.33lock.com/",
"https://www.33lock.com/blogpublishing",
"https://www.33lock.com/blogpublishing/2024-look-ahead",
"https://www.33lock.com/blogpublishing/6-reasons-to-upgrade-hotel-locks",
"https://www.33lock.com/blogpublishing/6-ways-smart-locks-save-time-and-money",
"https://www.33lock.com/blogpublishing/7-common-myths-about-smart-locks",
"https://www.33lock.com/blogpublishing/access-control-automation-selecting-the-right-partner-for-your-business",
"https://www.33lock.com/blogpublishing/are-digital-keys-the-future-of-hospitality",
"https://www.33lock.com/blogpublishing/building-redundancy-and-failover-procedures-into-your-access-control-system",
"https://www.33lock.com/blogpublishing/casestudy-ascensionassociates",
"https://www.33lock.com/blogpublishing/casestudy-dhccommunications-and-red-mountain-resort",
"https://www.33lock.com/blogpublishing/casestudy-kalidohospitalitygroup",
"https://www.33lock.com/blogpublishing/casestudy-sosuite-suiteop",
"https://www.33lock.com/blogpublishing/contact",
"https://www.33lock.com/blogpublishing/direct-api-vs-3rd-party",
"https://www.33lock.com/blogpublishing/hotel-check-in-smart-technology",
"https://www.33lock.com/blogpublishing/hotel-renovation-ideas",
"https://www.33lock.com/blogpublishing/how-to-get-started-with-33-lock",
"https://www.33lock.com/blogpublishing/installing-hotel-smart-locks-cost",
"https://www.33lock.com/blogpublishing/introducing-new-tech-at-your-property",
"https://www.33lock.com/blogpublishing/online-or-offline-locks",
"https://www.33lock.com/blogpublishing/smart-locks-amp-data-insights-optimizing-operations-and-driving-revenue-in-the-hotel-industry",
"https://www.33lock.com/blogpublishing/the-rise-of-bleisure-travel-how-smart-locks-cater-to-todays-modern-traveler",
"https://www.33lock.com/blogpublishing/ttlock-unlocking-convenience-and-simplified-access-control-management",
"https://www.33lock.com/blogpublishing/unlocking-flexibility-three-innovative-ways-to-set-a-pin-code",
"https://www.33lock.com/blogpublishing/why-we-started-33-lock",
"https://www.33lock.com/collection",
"https://www.33lock.com/collection/intellibolt",
"https://www.33lock.com/collection/intellibolt2",
"https://www.33lock.com/collection/intellilever",
"https://www.33lock.com/collection/intellilever2",
"https://www.33lock.com/collection/intellimortise",
"https://www.33lock.com/collection/intellireader",
"https://www.33lock.com/contact",
"https://www.33lock.com/partners",
"https://www.33lock.com/privacy-policy",
"https://www.33lock.com/return-request",
"https://www.33lock.com/terms-conditions",
"https://www.33lock.com/ttlock"
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