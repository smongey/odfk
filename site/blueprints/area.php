<?php if(!defined('KIRBY')) exit ?>

title: Area
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  thumbnail:
    label: Thumbnail
    type: select
    options: images
    width: 1/2
    help: 600x600
  text:
    label: Text
    type:  textarea