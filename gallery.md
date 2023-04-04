---
title: Gallery
permalink: /gallery/
---
## **Gallery**


{% assign image_dir = '/gallery' %}
{% assign images = site.static_files | where: "path", image_dir | sort: "name" %}

<h1>Gallery</h1>

<div class="gallery">
	{% for image in images %}
		{% if image.path contains ".jpeg" or image.path contains ".png" %}
			<img src="{{ image.url }}" alt="{{ image.name }}">
		{% endif %}
	{% endfor %}
</div>

