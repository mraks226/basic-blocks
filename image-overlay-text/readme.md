# Numbers callout block

This block found first on the School and Individual Membership page is labeled “all content meaning it’s probably in many more places.

There are two variations, left image and right image which could probably be the same and or similar block/pattern

![TBD Image 1 variation preview]()
![TBD Image 2 variation preview]()

# Block structure:
```
├── image-overlay-text.css - styles for block
├── image-overlay-text.block.json - init file for block
├── image-overlay-text.render.php - php and html for block
└── editor.css - editor styles
dist
├── block-preview.png - block preview image
```

# Pre-filled block template

You can edit the pre-filled template in the **image-overlay-text.render.php** file, the **$template array** is responsible for this.

# Allowed blocks

You can edit the list of allowed blocks in the file **image-overlay-text.render.php**, the array **$allowed_blocks**.