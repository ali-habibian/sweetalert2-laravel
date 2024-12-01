# SwalLaAlert

## Installation

1. **Install the package**:
   In your Laravel app, run:
    ```
    composer require ali-habibian/sweetalert2-laravel
    ```

2. **Publish assets**:
   Publish the package’s JavaScript file to your public directory:
    ```
    php artisan vendor:publish --tag=assets
    ```

3. **Install SweetAlert2 via npm**:
   In your Laravel app's root directory, run:
    ```
    npm install sweetalert2
    ```

4. **Compile your assets**:
   After installing SweetAlert2, run the following command to compile your JavaScript assets:
    ```
    npm run dev
    ```

   Or for production:
    ```
    npm run prod
    ```

5. **Include the compiled JavaScript**:
   In your `resources/views/layouts/app.blade.php` or wherever you include your main JavaScript, add the following line to load the compiled file:
    ```html
    <script src="{{ asset('js/vendor/swalalert.js') }}"></script>
    ```

6. **Usage**:
   In your controller, you can now easily flash an alert:
    ```php
    use AliHabibian\Sweetalert2Laravel\SwalLaAlert;

    public function store()
    {
        SwalLaAlert::flash('success', 'Product added successfully!');
        return redirect()->route('home');
    }
    ```

## Customization

You can customize the default confirmation button text by editing the configuration file located at `config/swalalert.php`.

For example, to change the default confirmation button text:

```php
return [
    'confirm_button_text' => 'Confirm',
];

