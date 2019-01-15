# Laravel Options

This useful Laravel Package allows you to have **get_option()** & **update_option()** wordpress style functions.

## How to use:

### Get an option ( optionally return a default value if not found )
`Options::get_option( $option_name, $option_value = null )`

### Set/Update an option
`Options::update_option( $option_name, $option_value )`

### Delete an option
`Options::delete_option( $option_name )`

## How to install:
`composer require crivion/options`

`php artisan migrate`

That's it!
