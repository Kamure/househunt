<?php
class Layouts {

    public function heading($conf) {
        echo "<!DOCTYPE html>";
        echo "<html lang='{$conf['language']}'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>{$conf['site_name']}</title>";
        echo "<style>
                body { font-family: Arial, sans-serif; margin: 40px; background-color: #f9f9f9; color: #333; }
                h1 { color: #2e6c80; }
                a { color: #2e6c80; text-decoration: none; }
                a:hover { text-decoration: underline; }
              </style>";
        echo "</head><body>";
        echo "<h1>Welcome to {$conf['site_name']}</h1>";
    }

    public function welcome() {
        echo "<p>Start your journey to finding the perfect home. Sign up to receive listings and verify your account.</p>";
    }

    public function footer($conf) {
        echo "<footer style='margin-top:40px; font-size:0.9em; color:#666;'>";
        echo "{$conf['site_name']} &copy; " . date("Y") . " | Contact: <a href='mailto:{$conf['site_email']}'>{$conf['site_email']}</a>";
        echo "</footer>";
        echo "</body></html>";
    }
}
?>