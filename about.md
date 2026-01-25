---
layout: page
title: About | Pixies Parties
permalink: /about/
description: Meet the team behind the magic. Learn about our commitment to character integrity, professional performance standards, and creating joy for Calgary families.
---

{% assign about = site.data.about %}
{% assign currentyear = site.time | date: "%Y" %}
{% assign startyear = about.experience_date | date: "%Y" %}
{% assign experience_years = currentyear | minus: startyear %}

## The Magic Behind Calgary's Favorite Character Parties

**Pixies Parties** is a premier provider of professional children's entertainment in **{{ about.location }}**. Founded by {{ about.founder }}, our mission is to bring storybook magic to life through high-fidelity character performances, authentic costumes, and engaging storytelling.

![Belle](/assets/img/characters/bellereading.webp "Belle")

### Why Calgary Parents Choose Pixies Parties
When you are looking for the **best princess party in Calgary**, you aren't just looking for a costume. You’re looking for a memory. Our team consists of trained performers who specialize in:

**Vocal Performance:** Live singing that brings the "Ice Queen" or "Little Mermaid" to life.  
**Immersive Acting:** Our characters stay in-character from the moment they step out of their "carriage" until they leave.  
**Child-Centric Engagement:** We manage groups of all sizes, from intimate home birthdays to large corporate events in Calgary.

### Our Service Area
While we are based in **Calgary**, our magic travels across Southern Alberta. We frequently provide character entertainment in:  
**{{ about.service_areas | join: ", " }}**.


![Cinderella](/assets/img/characters/cindy.webp "Cinderella")

### Authentic, Safe, and Trusted
As a local Calgary business, we prioritize safety and authenticity.  
**Magical Characters:** Our characters are inspired by timeless cherished fairytales.  
**Professional Standards:** We are a registered business in Alberta, ensuring a reliable and professional experience for every booking.

---

### Meet the Founder: {{ about.founder }}
{{ about.founder }} started Pixies Parties in {{ about.founding_date | date: "%B %Y" }} with a vision to create magical experiences for children in Calgary. With a background in theatre and a passion for storytelling, {{ about.founder_first_name }} has built a team dedicated to excellence in children's entertainment. With over {{experience_years}} years of hands-on experience in children’s party entertainment, she has brought characters like Elsa, Rapunzel, and Glinda to life at countless events.

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{ about.brand_name }}",
  "description": "Calgary's top-rated character and princess party entertainment service.",
  "areaServed": [
    {% for area in about.service_areas %}
    "{{ area }}"{% unless forloop.last %},{% endunless %}
    {% endfor %}
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Calgary",
    "addressRegion": "AB",
    "addressCountry": "CA"
  },
  "url": "{{ site.url }}{{ page.url }}"
}
</script>