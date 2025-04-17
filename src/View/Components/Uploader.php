<?php

namespace Codz\Uploader\View\Components;

use Illuminate\View\Component;

class Uploader extends Component
{
    /**
     * Component properties
     */
    public $id;
    public $name;
    public $label;
    public $multiple;
    public $hasLabel;
    public $required;
    public $accept;
    public $maxSize;
    public $files;
    public $deleteRouteName;
    public $deleteMethod;

    /**
     * Create a new Uploader component instance.
     *
     * @param string|null $id Random ID generated if not provided
     * @param string $name Form field name
     * @param string $label Display label
     * @param bool $multiple Allow multiple file uploads
     * @param bool $hasLabel Show the label
     * @param bool $required Mark field as required
     * @param string $accept Accepted file types
     * @param string $maxSize Maximum file size in KB
     * @param array|string $files Existing files to display
     * @param string|null $deleteRouteName Route name for file deletion
     * @param string $deleteMethod HTTP method for delete requests
     */
    public function __construct(
        $id = null,
        $name = 'image',
        $label = 'Browse Files',
        $multiple = false,
        $hasLabel = true,
        $required = false,
        $accept = '.png, .jpg, .jpeg',
        $maxSize = '500',
        $files = [],
        $deleteRouteName = null,
        $deleteMethod = 'GET'
    ) {
        $this->id = $id ?? uniqid('uploader-');
        $this->name = $name;
        $this->label = $label;
        $this->multiple = $multiple;
        $this->hasLabel = $hasLabel;
        $this->required = $required;
        $this->accept = $accept;
        $this->maxSize = $maxSize;
        $this->files = $files;
        $this->deleteRouteName = $deleteRouteName;
        $this->deleteMethod = $deleteMethod;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('codz-uploader::uploader');
    }
}