# save as export_to_md.py
import requests, markdownify, os, re

URLS = [
    "http://heddenchong.com/",
    "http://heddenchong.com/news/",
    # … add the rest
]

def slugify(url):
    slug = re.sub(r'https?://', '', url).rstrip('/').split('/')[-1]
    return slug or "home"

for url in URLS:
    api = url.rstrip('/') + "?_embed&context=edit"  # gets the rendered HTML
    html = requests.get(api).json()["content"]["rendered"]
    md   = markdownify.markdownify(html, heading_style="ATX")
    fname = f"{slugify(url)}.md"
    with open(fname, "w", encoding="utf-8") as f:
        f.write(f"# {url}\n\n")   # keeps the source url at top
        f.write(md)
    print("✓", fname)
