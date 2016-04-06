<?php if(!defined('KIRBY')) exit ?>

title: Item
pages:
  template: subitem
files: true
fields:
  title:
    label: Title
    type:  text
  thumbnail:
    label: Thumbnail
    type:  select
    options: images
    width: 1/2
    help: 760x760