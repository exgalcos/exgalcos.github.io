---
title: Gallery
permalink: /gallery/
---

{% assign gallery_files = site.static_files | where: "path", "_gallery" %}
{% assign sorted_gallery_files = gallery_files | sort: "name" %}

{% for file in sorted_gallery_files %}
  {% assign element = file.basename | replace: "-", " " %}
  {% assign element_data = site.data.gallery | where: "title", element | first %}

  {% if element_data %}
    <div>
      <h2><a href="{{ file.path }}">{{ element_data.title }}</a></h2>
      <img src="{{ site.baseurl }}{{ element_data.gallery_image }}" alt="{{ element_data.title }}">
    </div>
  {% endif %}
{% endfor %} 