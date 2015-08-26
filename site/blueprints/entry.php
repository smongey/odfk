<?php if(!defined('KIRBY')) exit ?>

title: Entry
pages: false
files:
  sortable: true
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
  entrydate:
    label: Date
    type:  text
    width: 1/2
    help: DD.MM.YYYY
  text:
    label: Text
    type:  textarea