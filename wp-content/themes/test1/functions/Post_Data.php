<?php

class Post_Data
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->data = get_post_meta($id);
    }

    /**
     * @param string $name
     * @param string $label
     * @param string $type
     * @param bool $required
     */
    function input($name, $label, $type = 'text', $options = [], $required = true)
    {
        $options_string = '';
        foreach ($options as $key => $value) {
            $options_string .= $key . '="' . $value . '" ';
        }

        echo '
<p>
    <label for="' . $name . '">
        <span>' . $label . '</span>
        <input type="' . $type . '" name="' . $name . '" id="' . $name . '" value="'
            . $this->data[$name][0] . '" ' . ($required ? 'required' : '') . " " . $options_string .
            '/>
    </label>
</p>
';
    }

    function select($name, $item, $label, $posts)
    {
        $names = '';
        while ($posts->have_posts()) {
            $posts->the_post();
            $id = get_the_ID();
            $meta = get_post_meta($id);
            $checked = $this->data[$name][0] == $id ? 'selected' : '';
            $names .= '<option value="' . $id . '" ' . $checked . '>' . $meta[$item][0] . '</option>';
        }
        echo '
<p>
    <label for="' . $name . '">
        <span>' . $label . '</span>
        <select name="' . $name . '">' . $names . '</select>
    </label>
</p>
';
    }

    /**
     * @param $name
     */
    function save($name)
    {
        update_post_meta($this->id, $name, $_POST[$name]);
    }
}