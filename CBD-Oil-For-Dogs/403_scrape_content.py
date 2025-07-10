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
"https://cbdoilfordogs.com/",
"https://cbdoilfordogs.com/about/",
"https://cbdoilfordogs.com/studies-reviewed/",
"https://cbdoilfordogs.com/studies-reviewed/combination-therapy-with-cannabidiol-and-chemotherapeutics-in-canine-urothelial-carcinoma-cells/",
"https://cbdoilfordogs.com/studies-reviewed/cbd-dog-safety-studies/",
"https://cbdoilfordogs.com/studies-reviewed/oral-transmucosal-cannabidiol-oil-formulation-as-part-of-a-multimodal-analgesic-regimen-effects-on-pain-relief-and-quality-of-life-improvement-in-dogs-affected-by-spontaneous-osteoarthritis/",
"https://cbdoilfordogs.com/studies-reviewed/pharmacokinetics-of-cannabidiol-following-single-oral-and-oral-transmucosal-administration-in-dogs/",
"https://cbdoilfordogs.com/studies-reviewed/randomized-blinded-controlled-clinical-trial-to-assess-effect-of-cbd-in-addition-to-conventional-antiepileptic-treatment-on-seizure-frequency-in-dogs-with-intractable-idiopathic-epilepsy/",
"https://cbdoilfordogs.com/studies-reviewed/safety-and-efficacy-of-cannabidiol-cannabidiolic-acid-rich-hemp-extract-in-the-treatment-of-refractory-epileptic-seizures-in-dogs/",
"https://cbdoilfordogs.com/studies-reviewed/the-effect-of-a-mixed-cannabidiol-and-cannabidiolic-acid-based-oil-on-client-owned-dogs-with-atopic-dermatitis/",
"https://cbdoilfordogs.com/cbd-oil-for-dogs-with-seizures-does-it-work/",
"https://cbdoilfordogs.com/cbd-versus-nsaids-for-dogs-with-arthritis/",
"https://cbdoilfordogs.com/will-cbd-make-my-dog-sleepy/",
"https://cbdoilfordogs.com/is-cbd-safe-for-dogs/",
"https://cbdoilfordogs.com/cbd-for-senior-dogs/",
"https://cbdoilfordogs.com/how-much-thc-is-safe-for-dogs/",
"https://cbdoilfordogs.com/why-vets-do-or-dont-recommend-cbd-oil/",
"https://cbdoilfordogs.com/help-my-dog-has-become-hyper-attached-during-the-lockdown/",
"https://cbdoilfordogs.com/everything-we-currently-know-about-the-entourage-effect/",
"https://cbdoilfordogs.com/should-you-buy-cbd-oil-for-dogs-on-amazon/",
"https://cbdoilfordogs.com/countering-the-caregiver-placebo-effect-in-your-dog/",
"https://cbdoilfordogs.com/can-i-give-my-dog-cbd-oil-for-humans/",
"https://cbdoilfordogs.com/when-should-i-put-cbd-oil-on-my-dogs-skin/",
"https://cbdoilfordogs.com/does-extraction-method-affect-the-quality-of-cbd-oil-for-dogs/",
"https://cbdoilfordogs.com/does-cbd-oil-for-dogs-have-any-side-effects/",
"https://cbdoilfordogs.com/can-cbd-oil-help-dogs-with-kidney-disease/",
"https://cbdoilfordogs.com/how-long-does-cbd-stay-in-my-dogs-system/",
"https://cbdoilfordogs.com/will-my-dog-get-high-on-cbd-oil-and-do-they-like-it/",
"https://cbdoilfordogs.com/can-i-give-my-dog-too-much-cbd/",
"https://cbdoilfordogs.com/how-do-i-know-if-my-dogs-cbd-oil-is-working/",
"https://cbdoilfordogs.com/how-do-i-give-my-dog-cbd-oil/",
"https://cbdoilfordogs.com/do-dogs-pant-when-they-are-in-pain/",
"https://cbdoilfordogs.com/how-do-you-stop-a-dog-from-having-seizures/",
"https://cbdoilfordogs.com/is-a-dog-in-pain-when-it-has-kidney-failure/",
"https://cbdoilfordogs.com/cluster-seizures-in-dogs/",
"https://cbdoilfordogs.com/dog-seizures-while-sleeping/",
"https://cbdoilfordogs.com/how-to-help-a-dog-with-separation-anxiety/",
"https://cbdoilfordogs.com/how-long-will-my-dog-be-in-pain-after-spaying/",
"https://cbdoilfordogs.com/how-to-tell-if-a-dog-is-in-pain/",
"https://cbdoilfordogs.com/what-causes-seizures-in-dogs/",
"https://cbdoilfordogs.com/what-can-i-give-my-dog-for-tooth-pain-relief/",
"https://cbdoilfordogs.com/benadryl-for-dogs-anxiety/",
"https://cbdoilfordogs.com/what-can-i-give-my-dog-for-pain/",
"https://cbdoilfordogs.com/how-to-calm-an-anxious-dog/",
"https://cbdoilfordogs.com/why-is-my-dog-anxious-all-of-a-sudden/",
"https://cbdoilfordogs.com/what-can-i-give-my-dog-for-anxiety/",
"https://cbdoilfordogs.com/is-cbd-oil-good-for-hip-dysplasia-in-dogs/",
"https://cbdoilfordogs.com/cbd-oil-for-dogs-with-allergies/",
"https://cbdoilfordogs.com/does-cbd-oil-help-dogs-with-dementia/",
"https://cbdoilfordogs.com/cbd-oil-for-vestibular-disease-in-dogs/",
"https://cbdoilfordogs.com/cbd-for-aggressive-dogs/",
"https://cbdoilfordogs.com/cbd-for-dogs-for-fireworks/",
"https://cbdoilfordogs.com/cbd-oil-for-dogs-with-cushings-disease/",
"https://cbdoilfordogs.com/how-long-can-a-dog-live-after-being-diagnosed-with-cancer/",
"https://cbdoilfordogs.com/what-causes-cancer-in-dogs/",
"https://cbdoilfordogs.com/can-cbd-help-dogs-with-cancer/",
"https://cbdoilfordogs.com/can-i-give-my-dog-cbd-oil-every-day/",
"https://cbdoilfordogs.com/how-long-can-a-dog-live-with-arthritis/",
"https://cbdoilfordogs.com/is-cbd-oil-a-good-solution-for-hyper-dogs/",
"https://cbdoilfordogs.com/cbd-for-puppies/",
"https://cbdoilfordogs.com/cbd-oil-for-dogs-with-separation-anxiety-does-it-really-work/",
"https://cbdoilfordogs.com/hemp-vs-marijuana-cbd-oil-whats-better-for-dogs/",
"https://cbdoilfordogs.com/hemp-oil-vs-cbd-oil-for-dogs/",
"https://cbdoilfordogs.com/cbd-dosage-for-dogs/",
"https://cbdoilfordogs.com/not-enough-dog-owners-know-about-heavy-metal-contaminants-in-cbd-products/",
"https://cbdoilfordogs.com/brand-reviews/",
"https://cbdoilfordogs.com/honest-paws-review/",
"https://cbdoilfordogs.com/canna-pet-review/",
"https://cbdoilfordogs.com/joy-organics-review/",
"https://cbdoilfordogs.com/royal-cbd-review/",
"https://cbdoilfordogs.com/spruce-cbd-pet-review/",
"https://cbdoilfordogs.com/cbdmd-review/",
"https://cbdoilfordogs.com/green-roads-review/",
"https://cbdoilfordogs.com/penelopes-bloom-review/",
"https://cbdoilfordogs.com/the-cbdistillery-review/",
"https://cbdoilfordogs.com/penguin-cbd-for-dogs-review/",
"https://cbdoilfordogs.com/discover-cbd-review/",
"https://cbdoilfordogs.com/lazarus-naturals-review/",
"https://cbdoilfordogs.com/cbd-sky-review/",
"https://cbdoilfordogs.com/pet-releaf-review/",
"https://cbdoilfordogs.com/innovet-pet-review/",
"https://cbdoilfordogs.com/4-corners-cannabis-review/",
"https://cbdoilfordogs.com/cbdfx-brand-review/",
"https://cbdoilfordogs.com/receptra-naturals-review/",
"https://cbdoilfordogs.com/charlottes-web-cbd-review/",
"https://cbdoilfordogs.com/hempmy-pet-review/",
"https://cbdoilfordogs.com/holistapet-review/",
"https://cbdoilfordogs.com/ellevet-review/",
"https://cbdoilfordogs.com/batch-pet-cbd-review/",
"https://cbdoilfordogs.com/lola-hemp-review/",
"https://cbdoilfordogs.com/cbd-american-shaman-review/",
"https://cbdoilfordogs.com/nuleaf-naturals-review/",
"https://cbdoilfordogs.com/austin-and-kat-review/",
"https://cbdoilfordogs.com/applied-basic-science-organics-review/",
"https://cbdoilfordogs.com/axis-labs-review/",
"https://cbdoilfordogs.com/cbdpet-review/",
"https://cbdoilfordogs.com/hemp-bombs-review/",
"https://cbdoilfordogs.com/petly-cbd-review/",
"https://cbdoilfordogs.com/no-high-review/",
"https://cbdoilfordogs.com/the-real-cbd-review/",
"https://cbdoilfordogs.com/hemp-depot-pure-pet-review/",
"https://cbdoilfordogs.com/stirling-cbd-review/",
"https://cbdoilfordogs.com/medterra-review/",
"https://cbdoilfordogs.com/king-kanine-review/",
"https://cbdoilfordogs.com/justcbd-review/",
"https://cbdoilfordogs.com/best-cbd-oil-for-dogs/arthritis/",
"https://cbdoilfordogs.com/best-cbd-oil-for-dogs/cancer/",
"https://cbdoilfordogs.com/best-cbd-oil-for-dogs/seizures/",
"https://cbdoilfordogs.com/best-cbd-oil-for-dogs/anxiety/",
"https://cbdoilfordogs.com/best-cbd-oil-for-dogs/",
"https://cbdoilfordogs.com/best-cbd-dog-treats/"

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

with open('combined_content.md', 'w', encoding='utf-8') as outfile:
    for fname in filenames:
        try:
            with open(fname, 'r', encoding='utf-8') as infile:
                outfile.write(infile.read())
                outfile.write('\n\n')  # Add separation between files
        except FileNotFoundError:
            print(f"Skipping {fname} (not found)")
print("Successfully created combined_content.md")