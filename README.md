<div align="center">
  <div style="display: flex; align-items: center; justify-content: center;">
    <img width="70" src="https://raw.githubusercontent.com/thecodezz/codz-uploader/main/imgs/codz-logo.png" alt="CODz Uploader Logo">
    <h1 style="margin-left: 10px;">Drag & Drop Uploader</h1>
  </div>

  <p></p>
    <img src="https://img.shields.io/badge/version-1.0.0-blue.svg" alt="Version">
    <img src="https://img.shields.io/badge/license-MIT-green.svg" alt="License">
    <img src="https://img.shields.io/badge/author-Ahmed%20Ali-orange.svg" alt="Author">
  </p>

  <h2>A modern, flexible file upload component</h2>
</div>

## Features

- 🖱️ **Drag & Drop Interface** - Intuitive drag and drop functionality
- 📁 **Single & Multiple File Support** - Flexible upload configurations
- 🖼️ **File Preview** - Visual previews for images and file type indicators
- 📋 **File Type Validation** - Built-in validation for file types
- 📏 **File Size Limits** - Customizable file size restrictions
- 🔄 **Existing Files Management** - Manage and delete existing files
- 🔍 **Responsive Design** - Fully responsive across all device sizes
- 🎨 **Customizable UI** - Easy to customize appearance
- ⚙️ **Framework Agnostic** - Works with any JavaScript framework
- 🧩 **Blade Component** - Ready-to-use Laravel Blade component

## Installation

### Laravel Installation

1. Install the package through Composer:

```bash
composer require thecodezz/codz-uploader
```

2. Publish the package assets:

```bash
# Publish assets (CSS and JS)
php artisan vendor:publish --tag=codz-uploader-assets

# Publish the Blade view component
php artisan vendor:publish --tag=codz-uploader-views
```

3. Include the assets in your layout:

```html
<!-- In your head section -->
<link rel="stylesheet" href="{{ asset('vendor/codz-uploader/styles.css') }}">

<!-- Before closing body tag -->
<script src="{{ asset('vendor/codz-uploader/scripts.js') }}"></script>
```

### Manual Installation

1. Download the package files from the GitHub repository.

2. Include the CSS in your `<head>`:

```html
<link rel="stylesheet" href="path/to/styles.css">
```

3. Include the JavaScript before the closing `</body>`:

```html
<script src="path/to/scripts.js"></script>
```

## Configuration Options

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `data-max-size` | Number | 5120 | Maximum file size in KB |
| `data-accepted-types` | String | '' | Comma-separated list of accepted file types |
| `data-single-mode` | Boolean | false | Whether to allow only a single file upload |
| `data-existing-files` | JSON | [] | Array of existing files with ID and URL |
| `data-delete-method` | String | 'GET' | HTTP method for delete requests |
| `data-required` | Boolean | false | Whether file upload is required |
| `data-name` | String | '' | Name attribute for form submission |
| `data-lang` | String | 'en' | Language code ('en' or 'ar' supported) |

## Usage

### Basic HTML Usage

```html
<div class="file-uploader" 
     data-max-size="5120" 
     data-accepted-types=".jpg,.png,.pdf"
     data-single-mode="true"
     data-name="document">
</div>
```

### Laravel Blade Usage

```php
<!-- Using Blade Component Tag Syntax (Laravel 7+) -->
<x-uploader
    name="document"
    label="Upload Document"
    :multiple="false"
    :required="true"
    accept=".pdf,.docx"
    maxSize="5120"
    deleteRouteName="files.delete"
/>

<!-- Using Blade Component Directive -->
@component('components.uploader', [
    'name' => 'document',
    'label' => 'Upload Document',
    'multiple' => false,
    'required' => true,
    'accept' => '.pdf,.docx',
    'maxSize' => '5120',
    'deleteRouteName' => 'files.delete'
])
@endcomponent

<!-- Using a Blade include -->
@include('codz-uploader::components.uploader', [
    'name' => 'document',
    'label' => 'Upload Document',
    'multiple' => false,
    'required' => true,
    'accept' => '.pdf,.docx',
    'maxSize' => '5120',
    'deleteRouteName' => 'files.delete'
])
```


## Troubleshooting

### Files Not Uploading
- Make sure your form has `enctype="multipart/form-data"` attribute

### Delete Function Not Working
- Ensure proper CSRF token is available if using Laravel
- Check that the delete URL is correctly configured
- Verify server permissions for file deletion

### Style Issues
- Make sure the CSS file is correctly loaded
- Check for CSS conflicts with your existing styles
- Try using browser inspector to identify style overrides

## Browser Support
- Chrome (latest)
- Firefox (latest)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

MIT License

## Author

Created by [Ahmed Ali](https://github.com/thecodezz)

---

<p align="center">
  <sub>Made with ❤️ by Ahmed Ali</sub>
</p>
