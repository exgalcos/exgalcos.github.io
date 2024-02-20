---
title: People
permalink: /people/
---

{% assign people_sorted = site.people | sort: 'joined' %}
{% assign role_array = "pi|postdoc|grad|under|former" | split: "|" %}

{% for role in role_array %}

{% assign people_in_role = people_sorted | where: 'position', role %}

<!-- Skip section if there's nobody -->
{% if people_in_role.size == 0 %}
  {% continue %}
{% endif %}

<div class="pos_header">
{% if role == 'pi' %}
<h3>Profressor</h3>
{% elsif role == 'postdoc' %}
<h3>Postdoctoral Fellows</h3>
{% elsif role == 'grad' %}
<h3>Graduate Students</h3>
{% elsif role == 'under' %}
<h3>Undergraduate Students</h3>
{% elsif role == 'former' %}
<h3>Former Members</h3>
{% endif %}
</div>

{% if role != 'alumni' %}
<div class="content list people">
  {% for profile in people_sorted %}
    {% if profile.position contains role %}
      <div class="list-item-people">
        <p class="list-post-title">
          {% if profile.avatar %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="{{site.baseurl}}/images/people/{{profile.avatar}}"></a>
          {% else %}
            <a href="{{ site.baseurl }}{{ profile.url }}"><img class="profile-thumbnail" src="http://evansheline.com/wp-content/uploads/2011/02/facebook-Storm-Trooper.jpg"></a>
          {% endif %}
          <a class="name" href="{{ site.baseurl }}{{ profile.url }}">{{ profile.name }}</a>
        </p>
      </div>    
    {% endif %}
  {% endfor %}
</div>
<hr>

{% else %}

<br>

| Who are they | When were they here | Where they went |
| :------------- |:-------------| :-----------|
| [Hoyoung Park](http://hdmtlab.github.io/people/hoyoung_park/index.html) | Ph.D. Student (2020 - 2021) | Assistant Professor, Department of Statistics at Sookmyung Women's University |
| [Soyeon Lim](http://hdmtlab.github.io/people/soyeon_lim/index.html) | MS Student (2020 - 2022) | |
| [Dohyup Shin](http://hdmtlab.github.io/people/dohyup_shin/index.html) | MS Student (2021 - 2022) | LG U+ |
| [Myungjun Kim](http://hdmtlab.github.io/people/myungjun_kim/index.html) | MS Student (2021 - 2022) | Samsung Electronics |

{% endif %}
{% endfor %}
