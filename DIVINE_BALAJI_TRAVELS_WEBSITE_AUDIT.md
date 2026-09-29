# Divine Balaji Travels — Website Validation Report

## Audit Information

Website:
https://www.divinebalajitravels.com

Audit Date:
29 September 2026

Repository:
`/Users/anand/Projects/websites/TBB`

Environment:
Local PHP/Apache source review and read-only production crawl. No production form submissions were made and no website files were changed during this audit.

---

# Executive Summary

Scope covered 64 discrete checks across the PHP/Apache application, 41 URLs in `sitemap.xml`, the blog index in `blog-sitemap.xml`, three non-indexable package routes found in source, shared templates, enquiry handlers, and representative live responsive checks.

| Result | Count |
| --- | ---: |
| PASS | 36 |
| FAIL | 2 |
| WARNING | 12 |
| NOT APPLICABLE | 1 |
| NEEDS MANUAL VERIFICATION | 13 |
| Total | 64 |

No claim is made about Google Search Console, mail delivery, analytics account reporting, or real-user Core Web Vitals because those require authenticated access or a deliberately submitted enquiry.

---

# 1. Functional Testing

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Header, footer and main sitemap links | PASS | — | 41 primary sitemap URLs | All crawled sitemap URLs returned HTTP 200. No confirmed broken internal website URL was found. | Re-run this crawl after each release. |
| HTTPS and host redirects | PASS | — | HTTP/non-www variants | Requests resolve to `https://www.divinebalajitravels.com`. | Preserve these rules in `.htaccess`. |
| Current phone and WhatsApp destination | PASS | — | Shared header, footer, lead popup and modern package templates | Tested shared links use `+91 9994751079` / `wa.me/919994751079`. | Keep one shared source of truth for future contact changes. |
| Legacy desktop Call Now CTAs | FAIL | HIGH | `shirdi-tour-package-from-chennai-by-direct-flight.php:149`, `srivani-vip-break-darshan-tour-package-from-chennai.php:494` | The visible desktop “Call Now” controls use `javascript:void()` and cannot place a call. Their mobile counterparts use `tel:`. | Replace with the shared `tel:+919994751079` destination and retain a useful accessible label. |
| Legacy WhatsApp CTAs | FAIL | HIGH | `shirdi-tour-package-from-chennai-by-direct-flight.php:154,693`; `srivani-vip-break-darshan-tour-package-from-chennai.php:498,768` | These links use protocol-relative `web.whatsapp.com/send` URLs with corrupted prefilled text. They are inconsistent with the working `wa.me` links used elsewhere and are a conversion risk. | Use a valid HTTPS `https://wa.me/919994751079?text=...` URL with URL-encoded readable text. |
| Enquiry endpoint wiring | PASS | — | `con_enq.php`, `enquiry-submit.php` | Forms point to server-side POST handlers; handlers validate name, mobile and captcha before mail is attempted. | Preserve server-side validation when templates change. |
| Form delivery and thank-you state | NEEDS MANUAL VERIFICATION | — | All enquiry forms | Sending a real audit enquiry was intentionally avoided. Code has success and error responses, but mailbox delivery, browser success UI and duplicate-submit prevention were not proved on live production. | Submit one owner-approved test to each endpoint and verify recipient, success feedback and no duplicate delivery. |
| FAQ / accordion interaction | NEEDS MANUAL VERIFICATION | — | Homepage and package pages | Markup and scripts are present; exhaustive keyboard and animation testing was not performed on every template. | Manually test open/close, focus and Escape/keyboard behaviour on desktop and mobile. |

---

# 2. Content Validation

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Public branding and current contact number | PASS | — | Shared header/footer and sampled live pages | “Divine Balaji Travels” is the visible brand and the shared display/CTA number is `+91 9994751079`. | Maintain this shared configuration. |
| Placeholder commercial pages | WARNING | MEDIUM | `/bengaluru-tirupati-flight-package-two-days`, `/delhi-tirupati-flight-package-two-days` | Both pages explicitly say they are “being updated”. They are correctly noindex, but they are not sales-ready public landing pages. | Finish the intended page content before making these routes indexable or prominently promoting them. |
| Package price accuracy | NEEDS MANUAL VERIFICATION | — | All package pages | Prices are presented as reference prices, but live supplier availability and commercial accuracy cannot be inferred from source. | Owner should review prices, availability language and inclusions before each campaign. |
| Physical address and hours | NEEDS MANUAL VERIFICATION | — | `includes/header.php:177-208` | Schema declares Chennai and 00:00–23:59 opening hours; public business evidence was not independently verified. | Confirm the true address and service hours with the owner before publishing structured data changes. |
| Development / placeholder scan | PASS | — | Public PHP, templates and assets scanned | No confirmed public localhost URL, pages.dev URL, Lorem ipsum, test credential or exposed secret was found in the reviewed output. | Continue this scan before releases. |

---

# 3. On-Page SEO

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Title, description, canonical and H1 presence | PASS | — | 41 sitemap URLs | Every crawled sitemap page had a title, meta description, absolute canonical and H1. Titles were unique in this inventory. | Keep these fields mandatory for new pages. |
| Generic, incorrect H1s | WARNING | HIGH | 21 indexable pages listed in URL Inventory | Eleven temple pages share “Tirumala Darshan for Special Darshan Tour Package”; seven unrelated pages share “Tirumala Darshan for Seva Darshan Tour Package”; three pages share an NRI heading. Those headings conflict with each page’s title and intent. | Give each page one truthful, page-specific H1 matching its title and visible subject. Do not rewrite supporting content unnecessarily. |
| Long description | WARNING | LOW | `/hyderabad-tirupati-flight-package-two-days` | Meta description is about 170 characters, so search results may truncate it. | Tighten to roughly 140–160 characters while retaining its actual package topic and price qualifier. |
| Legacy meta-keywords | WARNING | LOW | `includes/header.php` | A broad sitewide `meta name="keywords"` list is output. Modern search engines do not use this as a ranking signal, and a universal list can be irrelevant to many pages. | Remove the sitewide keywords meta in a planned SEO cleanup; do not replace it with keyword stuffing. |
| Internal commercial-page discovery | WARNING | MEDIUM | Mumbai/Bengaluru/Delhi package routes | Mumbai has full content but is noindex and absent from the sitemap; Bengaluru and Delhi are noindex placeholders. | Decide which completed commercial pages should be indexable, included in the sitemap and linked contextually. Keep unfinished pages noindex. |
| Image alt attributes, homepage sample | PASS | — | Homepage | All seven sampled homepage images had an `alt` attribute. | Expand this automated check to the whole site during the next release. |

---

# 4. Technical SEO

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| HTTPS, canonical and robots on sitemap URLs | PASS | — | 41 sitemap URLs | Every sitemap URL returned 200, had an absolute HTTPS self-canonical and `index, follow`. | Maintain this invariant in deployment checks. |
| Extensionless VIP URL duplicates | WARNING | MEDIUM | `/tirupati-vip-darshan-packages.php` and corresponding extensionless route; same routing pattern for the five VIP files | The `.php` URL remains directly accessible with HTTP 200 instead of redirecting to its extensionless canonical. Canonicals reduce risk, but a redirect is the stronger duplicate-URL signal. | Add targeted 301 redirects from each five `.php` VIP URL to its extensionless canonical after verifying no campaign or form dependency uses the old URL. |
| Homepage duplicate URL | WARNING | MEDIUM | `/index.php`, `includes/footer.php:19` | `/index.php` is linked in the footer and remains reachable rather than redirecting to `/`. | Replace the link with `/` and add a 301 from `/index.php` to `/`. |
| Server-side rendering | PASS | — | PHP templates | Titles, headings, content, canonicals and JSON-LD are rendered by PHP, not dependent on client JavaScript. | Keep essential SEO content server-rendered. |
| Mixed content / failed assets | PASS | — | Homepage browser sample | No browser console errors or warnings were observed on the tested live homepage. | Repeat on high-traffic templates after releases. |
| Mobile responsive overflow | PASS | — | Homepage, VIP page and Hyderabad package page | At 320, 375, 390, 414 and 768px, each sampled template had no horizontal document overflow. | Visual review is still needed after significant CSS changes. |

---

# 5. Hreflang

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Hreflang necessity | NOT APPLICABLE | — | Site-wide | The reviewed site presents a single English language/market version. There are no alternate regional or language equivalents requiring reciprocal hreflang clusters. | Do not add new hreflang variants unless genuine alternate language/market pages are launched. |
| Existing VIP hreflang tags | PASS | — | Five VIP package templates | Each requested VIP package template has self-referencing `en` and `x-default` URLs aligned with its canonical. They are harmless but do not replace a multilingual implementation. | Keep them self-referential if retained. |

---

# 6. Sitemap

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Main sitemap availability and XML | PASS | — | `/sitemap.xml` | Accessible, parseable XML with 41 HTTPS URLs. | Regenerate/maintain it after URL changes. |
| Sitemap crawl status | PASS | — | `/sitemap.xml` | All 41 listed URLs returned HTTP 200; none was observed as noindex or canonically pointing elsewhere. | Keep this automated release check. |
| Sitemap declaration | PASS | — | `/robots.txt` | `robots.txt` allows crawling and declares both `/sitemap.xml` and `/blog-sitemap.xml`. | Preserve both declarations. |
| Blog sitemap | PASS | — | `/blog-sitemap.xml` | Accessible XML containing the current blog index URL. | Ensure published posts are added if the blog is expected to rank individually. |
| Missing from sitemap | WARNING | MEDIUM | Mumbai, Bengaluru and Delhi package routes | These three source-discovered public routes are absent. This is intentional for noindex pages; Mumbai has fuller content and needs an owner indexing decision. | Add only completed, indexable pages; leave unfinished noindex pages out. |
| Present in sitemap but should not be | PASS | — | `/sitemap.xml` | No 404, redirected or noindex sitemap entry was observed. | Re-check after each sitemap edit. |

---

# 7. Google Search Console Readiness

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Technical readiness of sitemap pages | PASS | — | 41 sitemap URLs | HTTP 200, HTTPS canonicals, `index, follow`, sitemap inclusion and representative mobile checks support inspection readiness. | Inspect priority pages in Search Console after resolving the H1 and duplicate-URL issues. |
| Actual Google indexing and selected canonical | NEEDS MANUAL VERIFICATION | — | Google Search Console | No authenticated Search Console access was available. | Open the domain property, inspect priority URLs, compare user/Google canonicals, review enhancements, then request indexing where appropriate. |
| Coverage / URL inspection workflow | NEEDS MANUAL VERIFICATION | — | Google Search Console | Crawl data cannot establish Google discovery, crawl history or coverage exclusions. | Review Pages, Sitemaps, Core Web Vitals and Enhancements reports. |

---

# 8. Indexing Readiness

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Ready for indexing request | PASS | — | Homepage, `/tirupati-vip-darshan-packages`, `/hyderabad-tirupati-flight-package-two-days`, and other completed sitemap URLs | These are live, indexable, canonical and present in the sitemap. | After H1 corrections, inspect priority URLs in Search Console and request indexing only for material new/changed pages. |
| Fix before indexing request | WARNING | HIGH | 21 pages with mismatched H1s | The technical signals exist, but page-topic alignment is poor. | Correct H1s before prioritising those URLs for indexing requests. |
| Not ready / intentionally excluded | PASS | — | Bengaluru and Delhi package pages | `noindex, follow` and sitemap exclusion correctly prevent unfinished pages being promoted to search. | Keep excluded until complete. |
| Owner decision required | NEEDS MANUAL VERIFICATION | — | Mumbai package page | It is content-complete but noindex and excluded from sitemap. | Confirm whether to launch it for organic search; if yes, change robots, sitemap and internal links together. |

---

# 9. Performance

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Basic production response snapshot | PASS | — | Homepage, VIP and Hyderabad pages | Read-only fetches returned 200 in approximately 0.58–0.62 seconds total, with about 0.42–0.48 seconds time to first byte. These are single synthetic snapshots, not field data. | Monitor over time and test from target visitor regions. |
| Large legacy image assets | WARNING | MEDIUM | `assets/images/w1.png` (~1.7 MiB), `sslider1.jpg` (~1.2 MiB), `slider2.jpg` (~0.9 MiB), logo PNG (~0.8 MiB) | Several source assets are substantial for mobile delivery. It was not confirmed that every one is loaded on the critical path. | Audit actual page usage, resize/compress non-critical originals and serve modern responsive variants where it benefits the real page. |
| Third-party scripts | WARNING | MEDIUM | `includes/header.php`, `includes/footer.php`, `includes/script.php` | Google tags, Artibot, Statcounter and Microsoft Clarity add network and main-thread cost. | Measure with Lighthouse/WebPageTest before removing anything; retain only tools with a clear business purpose. |
| Core Web Vitals | NEEDS MANUAL VERIFICATION | — | Production / Search Console / CrUX | LCP, CLS and INP need field data or controlled browser performance runs. | Review Search Console Core Web Vitals and run Lighthouse on key templates. |

---

# 10. Structured Data

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Existing structured data | PASS | — | `includes/header.php`, homepage, VIP pages, blog templates | TravelAgency is sitewide; homepage additionally has TouristTrip, ItemList, FAQPage and BreadcrumbList; packages use BreadcrumbList; blog supports Article and BreadcrumbList. | Validate representative live pages in Schema Markup Validator after substantive updates. |
| TravelAgency data consistency | WARNING | MEDIUM | `includes/header.php:177-208` | Schema names “Tirupati Balaji Travels” while visible branding is Divine Balaji Travels; `streetAddress` is blank; `priceRange` is ambiguous; hours are 00:00–23:59. | Use the exact verified business name, complete verified address, meaningful price range and true service hours. Do not invent values. |
| FAQ markup eligibility | NEEDS MANUAL VERIFICATION | — | Homepage and pages with FAQ sections | Homepage FAQ schema exists; the audit did not compare every JSON-LD question/answer against visible content after dynamic rendering. | Verify each FAQPage entry remains visible and matches its rendered text exactly. |

---

# 11. Security

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Obvious public-secret scan | PASS | — | PHP/templates/assets reviewed | No confirmed exposed private token, password, test credential or localhost endpoint was found. Mail configuration exists but no secret value was opened or recorded. | Keep credentials outside version control and rotate immediately if a future scan finds one. |
| Form anti-spam consistency | WARNING | MEDIUM | `con_enq.php`, `enquiry-submit.php` | `enquiry-submit.php` has a hidden honeypot; `con_enq.php` has no equivalent visible anti-bot control and no application-level rate limit was found. | Add a consistent honeypot and rate limiting/server-side abuse protection to `con_enq.php`; test legitimate forms after implementation. |
| Phone validation inconsistency | WARNING | MEDIUM | `con_enq.php:55`, `enquiry-submit.php:36` | One endpoint accepts 6–12 digits and the other 6–15 digits. A valid international number can behave differently by page. | Centralise the shared validation rule and document the supported format. |
| Transport security | PASS | — | `.htaccess`, production | HTTP/non-www traffic is redirected to HTTPS/www. | Keep TLS and redirect tests in deployment QA. |

---

# 12. Analytics & Conversion Tracking

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Google Ads baseline and phone conversion configuration | PASS | — | `includes/header.php:163-174`, `includes/footer.php:288-300` | Google Ads config and a phone-conversion configuration are present in source. | Verify live conversion firing with Tag Assistant and the Ads account. |
| Google Analytics version | WARNING | HIGH | `includes/header.php:163,172` | Tracking references Universal Analytics (`UA-188854373-1`), which is retired. No GA4 Measurement ID or Google Tag Manager container was found in the reviewed code. | Implement/confirm GA4 with the owner’s Measurement ID, define consent handling, and validate events in DebugView. |
| Conversion events | NEEDS MANUAL VERIFICATION | — | WhatsApp, call, email and enquiry actions | Presence of tags does not prove click/form events are recorded, attributed or deduplicated. | Use Tag Assistant/GA4 DebugView/Google Ads diagnostics to verify each important conversion. |
| Other analytics | WARNING | LOW | Artibot, Statcounter, Microsoft Clarity | Multiple third-party tracking/chat services are present. Their consent, data governance and necessity were not verified. | Confirm privacy/cookie disclosure and retain only approved tools. |

---

# 13. Accessibility

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Homepage image alternatives | PASS | — | Homepage | Sampled images had `alt` attributes. | Keep meaningful alternatives; use empty alt only for decorative assets. |
| Heading meaning | WARNING | HIGH | 21 indexable pages identified above | Generic H1s harm both semantic navigation and page understanding. | Replace with one page-specific H1 per page. |
| Form labels and native validation | WARNING | MEDIUM | Legacy forms with `novalidate` | Many legacy forms rely on JavaScript/server-side messages instead of browser native validation; exhaustive label association and screen-reader feedback was not demonstrated. | Test with keyboard and a screen reader; ensure every field has an associated label and errors are announced. |
| Keyboard, focus, contrast and touch targets | NEEDS MANUAL VERIFICATION | — | All templates | Automated source/crawl inspection cannot certify interaction states and contrast across all component variants. | Perform a manual keyboard/zoom/contrast pass on header, dropdown, modal, forms, FAQ and floating buttons. |

---

# 14. Mobile QA

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Widths 320, 375, 390, 414 and 768px | PASS | — | Homepage, VIP package and Hyderabad package | No horizontal document overflow was measured in the three representative page archetypes at all five required widths. | Repeat after layout work and visually inspect all legacy page families. |
| Mobile navigation and menu behaviour | NEEDS MANUAL VERIFICATION | — | Shared header | No clipping was detected, but every dropdown/menu state was not manually operated at every width. | Test tap, close, focus return and all menu destinations on physical devices. |
| Mobile forms and sticky/floating controls | NEEDS MANUAL VERIFICATION | — | Homepage and package forms | Layout fit was checked; real input, date picker, captcha and submit flows were not submitted. | Owner-approved device QA should cover form entry and floating WhatsApp/chat overlap. |

---

# 15. Final Pre-Sales Validation

| Check | Status | Severity | URL/File | Finding | Recommendation |
| ----- | ------ | -------- | -------- | ------- | -------------- |
| Branding, shared contact and core CTAs | PASS | — | Shared templates and sampled key pages | Logo/brand presentation, shared current phone number and primary enquiry routes are consistent in sampled pages. | Maintain configuration centralisation. |
| Professional readiness blockers | WARNING | HIGH | Legacy Call/WhatsApp CTAs; generic H1 pages; UA tracking | A prospective client could encounter non-working legacy desktop call controls, malformed WhatsApp prompts, unrelated headings and obsolete analytics. | Resolve high-priority items before a broad paid campaign or sales demonstration. |
| Package completion state | WARNING | MEDIUM | Bengaluru/Delhi/Mumbai routes | Public route strategy is not fully aligned: two placeholders are intentionally excluded, while a complete Mumbai page remains noindex. | Agree a launch list with the owner and apply indexing/sitemap/menu decisions consistently. |
| Live lead receipt | NEEDS MANUAL VERIFICATION | — | All form endpoints/mailbox | No mailbox spam was sent during audit. | Conduct the owner-approved endpoint tests and record results. |

---

# CRITICAL ISSUES

No CRITICAL issue was confirmed in this audit.

---

# HIGH PRIORITY ISSUES

1. **Legacy desktop Call Now CTAs do not call.** Evidence: `javascript:void()` in `shirdi-tour-package-from-chennai-by-direct-flight.php:149` and `srivani-vip-break-darshan-tour-package-from-chennai.php:494`. Replace with the shared `tel:` URL.
2. **Legacy WhatsApp CTAs contain corrupted prefilled text.** Evidence: malformed `web.whatsapp.com/send` links in the two source files named in Functional Testing. Replace with valid `https://wa.me/` links.
3. **Twenty-one indexable pages have generic or unrelated H1s.** Evidence and URL groups appear in the URL Inventory. Give every page a precise H1.
4. **Universal Analytics is configured rather than GA4.** Evidence: `UA-188854373-1` in `includes/header.php`. Confirm and implement GA4 before relying on traffic/conversion reporting.

---

# MEDIUM PRIORITY ISSUES

1. Targeted `.php` and `/index.php` duplicate URLs return 200 rather than 301 to their preferred canonical routes.
2. `con_enq.php` lacks the anti-bot honeypot used by `enquiry-submit.php`; number-length validation differs between handlers.
3. TravelAgency schema has unverified or inconsistent business data.
4. Mumbai is a complete page but `noindex` and absent from the sitemap; Bengaluru/Delhi are still public placeholders.
5. Several legacy source image assets are large and third-party scripts add performance cost.

---

# LOW PRIORITY ISSUES

1. The Hyderabad package meta description is likely to truncate in search results.
2. The universal meta-keywords tag should be retired in a planned cleanup.
3. Statcounter, Clarity and Artibot should be reviewed for consent and business value.

---

# NEEDS MANUAL VERIFICATION

1. Google Search Console ownership, coverage, Google-selected canonicals, indexing and enhancement reports.
2. Mailbox delivery, autoresponse (if any), thank-you UI and duplicate-submission behaviour for each enquiry endpoint.
3. Real package price, availability, inclusions, business address and service hours.
4. GA4/Ads event firing, attribution and conversion reporting.
5. Field Core Web Vitals (LCP, CLS and INP).
6. Keyboard navigation, focus visibility, contrast and touch-target behaviour across all templates.
7. Mobile menu, FAQ, popup and floating-control interaction on physical devices.
8. Every external destination (WhatsApp, email, maps and third-party booking/support links) after the legacy CTA repairs.

---

# URL INVENTORY

The primary sitemap contains 41 URLs. All rows below returned 200, are indexable and are in the sitemap unless stated otherwise. Descriptions are recorded verbatim from the production crawl. The final four rows are source-discovered routes outside the primary sitemap.

| URL | Status | Indexable | Canonical | Sitemap | Title | H1 | Meta Description | Notes |
| --- | ---: | --- | --- | --- | --- | --- | --- | --- |
| `/` | 200 | Yes | `https://www.divinebalajitravels.com` | Yes | Tirupati Tour Packages from Chennai & Hyderabad \| Car & Hotels | Tirupati Tour Packages from Chennai & Hyderabad | Tirupati tour packages from Chennai and Hyderabad with private car travel, hotel stay, pickup, trip planning and return drop support for devotees. | `/index.php` is a duplicate URL. |
| `/tirupati-vip-darshan-packages` | 200 | Yes | self | Yes | Tirupati VIP Darshan Packages \| Srivani VIP Break Darshan | Tirupati VIP Darshan Packages & Srivani VIP Break Darshan | Book Tirupati VIP Darshan Packages and Srivani VIP Break Darshan tour packages from Hyderabad, Mumbai, Bangalore and Delhi with flight or car travel options. | `.php` duplicate is reachable. |
| `/hyderabad-tirupati-flight-package-two-days` | 200 | Yes | self | Yes | Tirupati Package from Hyderabad by Flight – 2 Days \| 1N/2D | Tirupati Package from Hyderabad by Flight – 2 Days | Book a 1 Night 2 Days Tirupati package from Hyderabad by flight with hotel, private AC cab, temple visits and Srikalahasti. Starting reference price Rs. 35,229 for 2 PAX. | Description ~170 chars. |
| `/shirdi-tour-package-from-chennai-by-direct-flight.php` | 200 | Yes | self | Yes | Shirdi Tour Package from Chennai by Direct Flight \| VIP Darshan | Shirdi Tour Package from Chennai by Direct Flight | Book Shirdi tour package from Chennai by direct flight. Includes VIP Darshan, hotel stay, meals & airport transfers. Call now for best price. | Legacy CTA faults. |
| `/famous-temples-near-by-tirupati.php` | 200 | Yes | self | Yes | Famous Temples Near Tirupati \| Temple Tour Guide | Tirumala Darshan for NRI TIRUPATI BALAJI DARSHAN PACKAGE | Explore famous temples near Tirupati including Sri Padmavathi, Govindaraja Swamy, ISKCON and more, with private car travel and darshan planning support. | Incorrect generic H1. |
| `/sri-padmavathi-amman-temple.php` | 200 | Yes | self | Yes | Sri Padmavathi Amman Temple, Tiruchanur \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit Sri Padmavathi Amman Temple in Tiruchanur with a private darshan tour package including car travel, pickup and trip planning support. | Incorrect generic H1. |
| `/sri-govindaraja-swamy-temple.php` | 200 | Yes | self | Yes | Sri Govindaraja Swamy Temple Tirupati \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit Sri Govindaraja Swamy Temple in Tirupati with a private darshan tour package including car travel, pickup and trip planning support. | Incorrect generic H1. |
| `/kalyana-venkateswara-temple-srinivasa-mangapuram.php` | 200 | Yes | self | Yes | Kalyana Venkateswara Temple Srinivasa Mangapuram | Tirumala Darshan for Special Darshan Tour Package | Plan a visit to Kalyana Venkateswara Temple in Srinivasa Mangapuram with private car travel and complete darshan package support. | Incorrect generic H1. |
| `/iskon-temple.php` | 200 | Yes | self | Yes | ISKCON Temple Tirupati \| Temple Guide & Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit ISKCON Temple Tirupati with a private darshan tour package including car travel, pickup and complete trip planning support. | Incorrect generic H1. |
| `/sri-kapileswara-swamy-temple.php` | 200 | Yes | self | Yes | Sri Kapileswara Swamy Temple Tirupati \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit Sri Kapileswara Swamy Temple in Tirupati with a private darshan tour package including car travel and trip planning support. | Incorrect generic H1. |
| `/sri-kalyana-venkateshwara-swamy-temple-narayanavanam-temple.php` | 200 | Yes | self | Yes | Kalyana Venkateshwara Temple Narayanavanam Guide | Tirumala Darshan for Special Darshan Tour Package | Plan a visit to Sri Kalyana Venkateshwara Swamy Temple in Narayanavanam with private car travel and darshan package support. | Incorrect generic H1. |
| `/sri-prasanna-venkateswara-temple.php` | 200 | Yes | self | Yes | Sri Prasanna Venkateswara Temple, Appalayagunta \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Plan a visit to Sri Prasanna Venkateswara Temple with a private darshan tour package including car travel and trip planning support. | Incorrect generic H1. |
| `/sri-varasiddhi-vinayaka-temple-kanipakam.php` | 200 | Yes | self | Yes | Sri Varasiddhi Vinayaka Temple, Kanipakam \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit Sri Varasiddhi Vinayaka Temple in Kanipakam with a private darshan tour package including car travel and trip planning support. | Incorrect generic H1. |
| `/sri-vedanarayana-temple-nagalapuram.php` | 200 | Yes | self | Yes | Sri Vedanarayana Temple, Nagalapuram \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Plan a visit to Sri Vedanarayana Temple in Nagalapuram with private car travel and trip planning. | Incorrect generic H1. |
| `/vakula-matha-temple.php` | 200 | Yes | self | Yes | Vakula Matha Temple Tirupati \| Darshan Package | Tirumala Darshan for Special Darshan Tour Package | Visit Vakula Matha Temple in Tirupati with a private darshan tour package including car travel, pickup and trip planning support. | Incorrect generic H1. |
| `/pallikondeswara-swamy-temple-surutapalli.php` | 200 | Yes | self | Yes | Pallikondeswara Swamy Temple, Surutapalli \| Darshan Package | Tirumala Darshan for Special Darshan Tickets PACKAGE | Visit Pallikondeswara Swamy Temple in Surutapalli with a private darshan tour package including car travel and trip planning. | H1 should be page-specific. |
| `/contact-us.php` | 200 | Yes | self | Yes | Contact Us \| Divine Balaji Travels - Tirupati Tour Packages | Tirumala Darshan for Seva Darshan Tour Package | Get in touch with Divine Balaji Travels for Tirupati darshan packages, bookings and enquiries. Call +91-99947-51079 or send us a message. | Incorrect generic H1. |
| `/tirumala-darshan-timings.php` | 200 | Yes | self | Yes | Tirumala Darshan Timings \| Temple Timings & Seva Schedule | Tirumala Darshan Timings Tirumala Darshan Tour Package | Check Tirumala temple darshan timings, general temple hours and seva schedules to help plan your Tirupati pilgrimage visit. | Review H1 wording. |
| `/privacy-and-cookies-policy.php` | 200 | Yes | self | Yes | Privacy & Cookies Policy \| Divine Balaji Travels | Tirumala Darshan for Seva Darshan Tour Package | Read the privacy and cookies policy for divinebalajitravels.com, operated by Divine Balaji Travels, covering data use and website cookies. | Incorrect generic H1. |
| `/tirupati-tour-faq.php` | 200 | Yes | self | Yes | Tirupati Darshan Booking FAQs \| Tickets, NRI & Package Questions | Tirumala Darshan for Seva Darshan Tour Package | Answers to common questions about Tirupati darshan ticket booking, NRI darshan, Srivani tickets, infant darshan and tour package planning. | Incorrect generic H1. |
| `/refund-policy.php` | 200 | Yes | self | Yes | Refund Policy \| Divine Balaji Travels | Tirumala Darshan for Seva Darshan Tour Package | Read the refund and cancellation policy for Tirupati darshan tour packages booked through Divine Balaji Travels. | Incorrect generic H1. |
| `/tirupati-tour-packages-from-tirupati.php` | 200 | Yes | self | Yes | Tirupati Local Tour Packages \| Sightseeing & Temple Tours | Tirumala Darshan for Seva Darshan Tour Package | Explore Tirupati local tour packages covering nearby temples and sightseeing with private car travel and complete trip planning. | Incorrect generic H1. |
| `/srivani-vip-break-darshan-from-chennai.php` | 200 | Yes | self | Yes | Srivani Vip Break Darshan from Chennai | Chennai to Tirupati Car Package with Private Travel Assistance | Book Chennai to Tirupati car package with private cab travel, pickup, hotel stay options and complete trip assistance for devotees. | Review title/H1 alignment. |
| `/srivani-vip-break-darshan-from-hyderabad.php` | 200 | Yes | self | Yes | Tirupati Package from Hyderabad \| NRI & International Travel | Tirupati Package from Hyderabad for International Travellers | Tirupati package from Hyderabad for NRI and international travellers with airport pickup, hotel stay, travel support and trip planning. | — |
| `/tirupati-srivani-vip-darshan-malaysia-chennai.php` | 200 | Yes | self | Yes | Tirupati Package from Malaysia via Chennai \| Car & Hotel | Tirupati Travel Package from Malaysia via Chennai | Tirupati package from Malaysia via Chennai with airport pickup, private car, hotel stay, trip planning and return support. | — |
| `/tirupati-srivani-vip-darshan-malaysia-hyderabad.php` | 200 | Yes | self | Yes | Hyderabad to Tirupati Package by Flight for Malaysia Travellers | Hyderabad to Tirupati Package by Flight for Malaysia Travellers | Hyderabad to Tirupati package by flight for Malaysia travellers with airport pickup, transfers, stay options and itinerary support. Enquire now. | — |
| `/srivani-vip-break-darshan-tour-package-from-chennai.php` | 200 | Yes | self | Yes | Srivani Break Darshan Package from Chennai | Srivani Break Darshan Booking – Tirupati VIP Darshan Package from Chennai | Book Srivani Break Darshan Booking with Tirupati VIP Darshan Package from Chennai. Same-day darshan, AC transport, and complete assistance included. | Legacy CTA faults. |
| `/tirupati-darshan-booking-guide.php` | 200 | Yes | self | Yes | Tirupati Tour Packages \| Chennai & Hyderabad Guide | Tirupati Temple Tour Packages & Pilgrimage Travel Guide | Private Tirupati temple tour packages with pickup, travel, hotel stay and trip planning from Chennai and Hyderabad. Independent travel company. | — |
| `/tirupati-nri-darshan-booking-guide.php` | 200 | Yes | self | Yes | Tirupati NRI Visit Guide \| Eligibility, Documents & Travel Info | Tirupati NRI Visit Guide for Foreign Passport Holders | Tirupati NRI visit guide covering eligibility, documents, travel information, entry procedures and planning tips for foreign passport holders. | — |
| `/about-us.php` | 200 | Yes | self | Yes | About Divine Balaji Travels \| Tirupati Tour Packages from Chennai | About Us | Learn about Divine Balaji Travels, offering Tirupati tour packages from Chennai with private travel, hotel stay and pilgrimage support services. | — |
| `/srivani-vip-darshan-from-chennai-for-nri.php` | 200 | Yes | self | Yes | Chennai to Tirupati Tour Package for NRI \| Car & Hotel | Chennai to Tirupati Travel Package for NRI Devotees | Chennai to Tirupati tour package for NRI devotees with airport pickup, private car, hotel stay, Tirupati travel planning and return drop support. | — |
| `/srivani-vip-break-darshan-from-hyderabad-by-flight-for-nris.php` | 200 | Yes | self | Yes | Tirupati Package from Hyderabad by Flight for NRI Travellers | Tirupati Package from Hyderabad by Flight for NRI Travellers | Tirupati package from Hyderabad by flight for NRI travellers with airport pickup, hotel stay, travel support and itinerary planning. | — |
| `/tirupati-balaji-vip-darshan-tour-packages-from-chennai.php` | 200 | Yes | self | Yes | Tirupati Balaji VIP Darshan Tour Packages from Chennai | BEST TIRUPATI PACKAGE FROM CHENNAI - TIRUMALA TIRUPATI BALAJI DARSHAN PACKAGE | Tirupati Balaji VIP Darshan tour packages from Chennai with private car travel, pickup, hotel stay options and smooth pilgrimage trip support for devotees. | Review all-caps H1. |
| `/best-tirupati-tour-operators.php` | 200 | Yes | self | Yes | Tirupati Tour Operators from Chennai \| Book Now | Tirumala Darshan for Seva Darshan Tour Package | Compare trusted Tirupati tour operators offering private car travel, hotel stay and complete darshan package support from Chennai. | Incorrect generic H1. |
| `/nri-tirupati-darshan-booking.php` | 200 | Yes | self | Yes | NRI Tirupati Darshan Booking \| Special Entry for NRI Devotees | Tirumala Darshan for NRI TIRUPATI BALAJI DARSHAN PACKAGE | Book Tirupati darshan for NRI devotees with special entry assistance, airport pickup, hotel stay and complete travel support. | Incorrect generic H1. |
| `/tirupati-hotel-accommodation-services-booking-online.php` | 200 | Yes | self | Yes | Tirupati Hotel Accommodation Booking Online \| Stay Near Temple | Accommodation Services for Tirupati Darshan Tour Package | Book hotel accommodation near Tirupati temple online with our darshan tour packages including car travel and complete trip support. | — |
| `/tirupati-nri-darshan-package-from-chennai.php` | 200 | Yes | self | Yes | Tirupati NRI Package from Chennai by Car \| Airport Pickup | Tirupati NRI Travel Package from Chennai by Car | Tirupati NRI travel package from Chennai by car with airport pickup, travel support and passport help for Malaysia, Singapore, Sri Lanka and UK visitors. | — |
| `/tirupati-nri-darshan-package-from-hyderabad-by-flight.php` | 200 | Yes | self | Yes | Hyderabad to Tirupati Travel Package by Flight for NRIs | Hyderabad to Tirupati NRI Travel Package by Flight | Hyderabad to Tirupati NRI travel package by flight with itinerary support, travel assistance and guidance for foreign passport holders and international travellers. | — |
| `/tirupati-senior-citizens-booking.php` | 200 | Yes | self | Yes | Tirupati Darshan Package for Senior Citizens \| Comfortable Travel | Tirumala Darshan for NRI TIRUPATI BALAJI DARSHAN PACKAGE | Book a comfortable Tirupati darshan package for senior citizens with private car travel, assistance and complete trip planning support. | Incorrect generic H1. |
| `/tirupati-seva-darshan-tickets-booking-online.php` | 200 | Yes | self | Yes | Tirupati Seva Darshan Tickets Booking Online \| Seva Package | Tirumala Darshan for Seva Darshan Tour Package | Book Tirupati seva darshan tickets online with our private darshan tour package including car travel, pickup and trip assistance. | Incorrect generic H1. |
| `/tirupati-special-darshan-tickets-online.php` | 200 | Yes | self | Yes | Tirupati Special Darshan Tickets Online \| Booking Assistance | Tirumala Darshan for Special Darshan Tour Package | Book Tirupati special entry darshan tickets online with our private darshan tour package including car travel and trip planning support. | Incorrect generic H1. |
| `/blog/` | 200 | Yes | self | Blog sitemap | Dynamic blog index | Blog | Dynamic published-post metadata | Individual post URLs need sitemap review after publishing. |
| `/mumbai-tirupati-flight-package-two-days` | 200* | No | self | No | Tirupati Package from Mumbai by Flight – 2 Days \| 1N/2D | Tirupati Package from Mumbai by Flight – 2 Days | Book a 1 Night 2 Days Tirupati package from Mumbai by flight with hotel, private AC cab, temple visits and Srikalahasti. Starting reference price Rs. 43,896 for 2 PAX. | `noindex, follow`; source-reviewed. |
| `/bengaluru-tirupati-flight-package-two-days` | 200* | No | self | No | Bengaluru to Tirupati Flight Package Two Days \| Divine Balaji Travels | Bengaluru to Tirupati Flight Package Two Days | Bengaluru to Tirupati flight package for two days. Contact Divine Balaji Travels on WhatsApp for current availability and package pricing. | `noindex, follow`; placeholder. |
| `/delhi-tirupati-flight-package-two-days` | 200* | No | self | No | Delhi to Tirupati Flight Package Two Days \| Divine Balaji Travels | Delhi to Tirupati Flight Package Two Days | Delhi to Tirupati flight package for two days. Contact Divine Balaji Travels on WhatsApp for current availability and package pricing. | `noindex, follow`; placeholder. |

`*` Source-discovered route; its template and canonical/robots configuration were reviewed. The production crawl’s exhaustive 200-status list was the 41-URL primary sitemap plus blog index.

---

# SEO META INVENTORY

The URL Inventory above is the complete production metadata inventory for all 41 primary sitemap URLs plus the blog index and source-discovered package routes. The following compact table repeats the required SEO fields without duplicating long descriptions in prose.

| URL | Title | Meta Description | H1 | Canonical | Robots |
| --- | --- | --- | --- | --- | --- |
| `/` | Tirupati Tour Packages from Chennai & Hyderabad \| Car & Hotels | Tirupati tour packages from Chennai and Hyderabad with private car travel, hotel stay, pickup, trip planning and return drop support for devotees. | Tirupati Tour Packages from Chennai & Hyderabad | `https://www.divinebalajitravels.com` | index, follow |
| `/tirupati-vip-darshan-packages` | Tirupati VIP Darshan Packages \| Srivani VIP Break Darshan | Book Tirupati VIP Darshan Packages and Srivani VIP Break Darshan tour packages from Hyderabad, Mumbai, Bangalore and Delhi with flight or car travel options. | Tirupati VIP Darshan Packages & Srivani VIP Break Darshan | self | index, follow |
| `/hyderabad-tirupati-flight-package-two-days` | Tirupati Package from Hyderabad by Flight – 2 Days \| 1N/2D | Book a 1 Night 2 Days Tirupati package from Hyderabad by flight with hotel, private AC cab, temple visits and Srikalahasti. Starting reference price Rs. 35,229 for 2 PAX. | Tirupati Package from Hyderabad by Flight – 2 Days | self | index, follow |
| 38 remaining primary sitemap PHP pages | Each has a unique title and non-empty description as recorded in URL Inventory. | See verbatim descriptions in URL Inventory. | See URL Inventory; 21 require H1 correction. | Self | index, follow |
| `/blog/` | Dynamic blog index | Dynamic published-post metadata | Blog | self | index, follow |
| `/mumbai-tirupati-flight-package-two-days` | Tirupati Package from Mumbai by Flight – 2 Days \| 1N/2D | Mumbai two-day package reference-price description | Tirupati Package from Mumbai by Flight – 2 Days | self | noindex, follow |
| `/bengaluru-tirupati-flight-package-two-days` | Bengaluru to Tirupati Flight Package Two Days \| Divine Balaji Travels | Bengaluru two-day package contact description | Bengaluru to Tirupati Flight Package Two Days | self | noindex, follow |
| `/delhi-tirupati-flight-package-two-days` | Delhi to Tirupati Flight Package Two Days \| Divine Balaji Travels | Delhi two-day package contact description | Delhi to Tirupati Flight Package Two Days | self | noindex, follow |

---

# BROKEN LINKS

| Source URL | Broken URL | Status | Type | Recommended Action |
| ---------- | ---------- | -----: | ---- | ------------------ |
| `/shirdi-tour-package-from-chennai-by-direct-flight.php` | `javascript:void()` desktop Call Now CTA | Non-functional | CTA | Use `tel:+919994751079`. |
| `/srivani-vip-break-darshan-tour-package-from-chennai.php` | `javascript:void()` desktop Call Now CTA | Non-functional | CTA | Use `tel:+919994751079`. |
| `/shirdi-tour-package-from-chennai-by-direct-flight.php` | `//web.whatsapp.com/send?...&text=` with corrupted bytes | Invalid/unreliable | External CTA | Replace with HTTPS `wa.me` URL and readable encoded text. |
| `/srivani-vip-break-darshan-tour-package-from-chennai.php` | `//web.whatsapp.com/send?...&text=` with corrupted bytes | Invalid/unreliable | External CTA | Replace with HTTPS `wa.me` URL and readable encoded text. |

No confirmed 404 or 500 internal destination was found in the 41-URL sitemap crawl. A naïve crawler may label `/send` as an internal URL because these WhatsApp links are protocol-relative; it is not a website route and is not reported as such.

---

# Implementation Status

The original audit findings above are retained as the baseline. The following status records the approved remediation performed locally after that audit.

| Issue | Status | Files Changed | Verification |
| --- | --- | --- | --- |
| Legacy desktop Call Now and malformed WhatsApp CTAs | FIXED | `shirdi-tour-package-from-chennai-by-direct-flight.php`, `srivani-vip-break-darshan-tour-package-from-chennai.php` | All affected desktop and enquiry CTAs now use `tel:+919994751079` or a valid HTTPS `wa.me/919994751079` URL. Repository scan found no remaining `javascript:void()` CTA, `web.whatsapp.com/send` URL or stale phone number in active source. |
| Generic/mismatched H1s on 21 indexable pages | FIXED | The 21 audited generic-H1 templates, plus the related Pallikondeswara and Tirumala Timings templates | Source scan found zero instances of the three prior generic H1 patterns. Each affected page now has a unique H1 aligned to its page title and subject. |
| Retired Universal Analytics implementation | PARTIALLY FIXED | `includes/header.php`, `docs/CONFIGURATION.md` | The UA loader/configuration was removed. Google Ads remains loaded once. A guarded GA4 hook now activates only with a valid owner-supplied `DBT_GA4_MEASUREMENT_ID`; no ID was available to verify live GA4. |
| `/index.php` and five VIP `.php` duplicate URLs | FIXED | `.htaccess`, `includes/footer.php` | Local Apache test returned a direct 301 from each legacy route to its HTTPS canonical URL. The footer no longer links to `/index.php`. |
| Mumbai package indexability | FIXED | `mumbai-tirupati-flight-package-two-days.php`, `sitemap.xml` | The completed Mumbai page now has `index, follow`, its existing extensionless canonical and hreflang tags, breadcrumb plus FAQ structured data, and an exact canonical sitemap entry. |
| Bengaluru and Delhi placeholders | PARTIALLY FIXED | `bengaluru-tirupati-flight-package-two-days.php`, `sitemap.xml` | Bengaluru is now a complete source-aligned 1N/2D package page with `index, follow`, canonical/hreflang and FAQ/Breadcrumb structured data, and a canonical sitemap entry. Delhi remains the approved noindex placeholder and is not in the sitemap. |

---

# Post-Fix Validation

| Check | Result | Evidence |
| --- | --- | --- |
| PHP syntax | PASS | `php -l` passed for all 26 changed PHP files. |
| Diff whitespace | PASS | `git diff --check` passed. |
| Legacy CTA scan | PASS | No active PHP source matches for `javascript:void()`, `web.whatsapp.com/send` or a Universal Analytics `UA-` ID. |
| CTA rendering | PASS | Local rendered Shirdi and Srivani pages included the corrected telephone and WhatsApp destinations. |
| H1 scan | PASS | No prior generic H1 phrase remains in PHP source. |
| Redirect rules | PASS (LOCAL) | A temporary Apache instance returned HTTP 301 directly to the correct `https://www.divinebalajitravels.com/...` canonical URL for `/index.php` and all five VIP `.php` URLs. An extensionless local route mapper returned HTTP 200 for every destination. |
| GA4 configuration hook | PASS (STRUCTURE) | A test-shaped environment value rendered one GA4 loader/config call; without that value only the existing Google Ads tag renders. Live GA4 reporting remains manual verification. |
| Completed package SEO launch | PASS | VIP, Hyderabad, Mumbai and Bengaluru have self-canonicals, English/default hreflang. Mumbai and Bengaluru now render `index, follow`, and both are included in `sitemap.xml`; Delhi remains `noindex, follow` and excluded. |
| Build/lint/type check/test scripts | NOT APPLICABLE | This is a PHP/Apache project with no root `package.json`, Composer project manifest, lint script, type-check script or test runner. PHP syntax validation was the available project-native check. |
| Protected local-only paths | PASS | `assets/uploads/`, `database/local-schema.sql` and `tests/` remain unmodified and untracked. |

Before deployment, manually verify redirects and GA4 output on the hosting environment, then complete the owner-approved mailbox and analytics tests. No production form was submitted in this remediation phase.
