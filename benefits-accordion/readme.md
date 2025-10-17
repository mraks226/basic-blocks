# Benefits Accordion block

This block is an accordion consisting of a Details block. You can add Heading, Paragraph, and Details blocks as an accordion

![TBD Image 1 variation preview]()

# Block structure:
```
├── benefits-accordion.css - styles for block
├── benefits-accordion.js -  scripts for block
├── benefits-accordion.block.json - init file for block
├── benefits-accordion.render.php - php and html for block
└── editor.css - editor styles
dist
├── block-preview.png - block preview image
```

# Pre-filled block template

You can edit the pre-filled template in the **benefits-accordion.render.php** file, the **$template array** is responsible for this.

# Allowed blocks

You can edit the list of allowed blocks in the file **benefits-accordion.render.php**, the array **$allowed_blocks**.