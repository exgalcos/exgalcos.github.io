---
title: Gallery
permalink: /gallery/
---

{% assign gallery_sorted = site.gallery | sort: 'date' %}

{% for gallery_item in gallery_sorted %}
  <div>
    <h2><a href="{{ gallery_item.path }}">{{ gallery_item.title }}</a></h2>
    <img src="{{ site.baseurl }}{{ gallery_item.gallery_image }}" alt="{{ gallery_item.title }}">
  </div>
{% endfor %}