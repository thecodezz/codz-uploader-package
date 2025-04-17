# CODz File Uploader for Laravel

A modern, flexible drag-and-drop file uploader component for Laravel applications with built-in preview support and RTL language capabilities.

![CODz Uploader](https://via.placeholder.com/800x400?text=CODz+File+Uploader)

## Features

- ✅ Drag & drop file upload interface
- ✅ Single or multiple file upload support
- ✅ File type validation
- ✅ File size limitation
- ✅ Image preview for supported formats
- ✅ File type icons for non-image files
- ✅ Easy file deletion
- ✅ Built-in RTL support (Arabic)
- ✅ Fully styled and customizable
- ✅ Works with Laravel forms

## Installation

You can install the package via composer:

```bash
composer require thecodezz/codz-uploader
```

Then publish the package assets and component:

```bash
php artisan vendor:publish --tag="codz-uploader"
```

This will publish:
- JavaScript and CSS assets to `public/vendor/codz-uploader/`
- Blade component to `resources/views/components/codz-uploader.blade.php`

## Basic Usage

### Single File Upload

```php
<x-codz-uploader 
    name="document"
    label="Upload Document"
    accept=".pdf,.docx"
    maxSize="5120"
/>
```

### Multiple File Upload

```php
<x-codz-uploader 
    name="photos[]"
    label="Upload Photos"
    multiple="true"
    accept=".jpg,.jpeg,.png"
    maxSize="2048"
/>
```

### With Existing Files

```php
<x-codz-uploader 
    name="photos[]"
    label="Photo Gallery"
    multiple="true"
    accept=".jpg,.png"
    :files="[
        1 => 'https://example.com/uploads/photo1.jpg',
        2 => 'https://example.com/uploads/photo2.jpg'
    ]"
    deleteRouteName="photos.delete"
/>
```

### With Arabic Language Support (RTL)

```php
<x-codz-uploader 
    name="document"
    label="تحميل المستند"
    lang="ar"
    accept=".pdf,.docx"
    maxSize="5120"
/>
```

### Using Inside a Laravel Form

```php
<form action="/upload" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="form-group">
        <x-codz-uploader 
            name="document"
            label="Upload Document"
            required="true"
            accept=".pdf,.docx"
            maxSize="5120"
        />
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

## Configuration Options

| Option | Type | Default | Description |
|--------|------|---------|-------------|
| `name` | string | `'image'` | Input name attribute |
| `label` | string | `'Browse Files'` | Upload component label |
| `multiple` | boolean | `false` | Enable multiple file uploads |
| `hasLabel` | boolean | `true` | Show/hide the label |
| `required` | boolean | `false` | Make the file upload required |
| `accept` | string | `'.png, .jpg, .jpeg'` | Allowed file types |
| `maxSize` | string | `'500'` | Maximum file size in KB |
| `files` | array/string | `[]` | Pre-populated files |
| `deleteRouteName` | string | `null` | Route name for file deletion |
| `deleteMethod` | string | `'GET'` | HTTP method for deletion (GET, POST, DELETE) |
| `lang` | string | `'en'` | Language ('en' or 'ar' for Arabic) |

## Alternative Usage Methods

### Using Blade Component Directive

```php
@component('codz-uploader::components.uploader', [
    'name' => 'document',
    'label' => 'Upload Document',
    'multiple' => false,
    'required' => true,
    'accept' => '.pdf,.docx',
    'maxSize' => '5120'
])
@endcomponent
```

### Using Blade Include

```php
@include('codz-uploader::components.uploader', [
    'name' => 'document',
    'label' => 'Upload Document',
    'multiple' => false,
    'required' => true,
    'accept' => '.pdf,.docx',
    'maxSize' => '5120'
])
```

## Supported File Types

The uploader accepts file types based on MIME types or extensions:

```php
// For images
accept=".jpg,.jpeg,.png,.gif,.webp"

// For documents
accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx"

// For videos
accept=".mp4,.webm,.mov,.avi"

// Using MIME types
accept="image/*,application/pdf"

// Multiple types
accept="image/*,application/pdf,.docx"
```

## Custom Styling

The uploader comes with a pre-styled interface, but you can customize it by overriding CSS variables:

```css
:root {
  --uploader-primary: #4a90e2;  /* Primary color */
  --uploader-border: #dbe1e9;   /* Border color */
  --uploader-text: #333333;     /* Text color */
  --uploader-bg: #f9f9f9;       /* Background color */
  --uploader-error: #e74c3c;    /* Error state color */
  --uploader-success: #2ecc71;  /* Success state color */
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
