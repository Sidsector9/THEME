[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

Euclid Theme
============

Euclid theme is based on the [**underscores**](http://underscores.me/) starter theme created by [**Automattic**](https://automattic.com/).

### 1. Theme Structure
Below are the list of folders that are additionally added to the underscores starter theme.
* `/front-page-templates`
* `/images`
* `/lib`
    * `bootstrap`
    * `css`
    * `js`

### 2. Demo website
The demo website runs on additional 3 plugins to make the website fully functional as per the requirements described in the assignment.

#### 2.1 Plugin list
* `euclid-slider` creates a Custom Post Type **'Euclid Slider'** and gives a shortcode feature to display the slider through post content. (*See front page of the demo website*)
* `category-posts-widget` creates a widget to select category and displays posts from the selected category. (*See footer of the demo website*)
* `stay-in-touch` creates a widget to add social media links. (*See footer of the demo website*)

### 3. Customizer Options
**Header/Footer** logo can be added through the customizer. (*default image option available*).

### 4. Additional details about the theme
The default `style.css` stylesheet in untouched. All the theme styling is written in `/lib/css/main.css`
and all the javascript code is written in `/lib/js/euclid-custom-script.js`

**Stylesheets** and **Javascript** files of the custom widgets and plugins as listed in section **2.1** are part of their respective plugin directories.