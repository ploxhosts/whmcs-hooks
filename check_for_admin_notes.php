<?php

// Check if service has admin notes set. If it does, display a warning on top of the screen notifying team.

add_hook('AdminAreaHeaderOutput', 1, function($vars)
{

    if ($vars['filename'] == 'clientsservices') {
        return <<<HTML
        <script type="text/javascript">
        $(document).on('ready', function() {
            // get output from textbox and check if it has content
            const notes = $("textarea[name=notes]").val();
            if (notes) {
                $('#servicecontent .contentbox').after('<div class="errorbox"><strong><span class="title">Admin Notes are Set!</span></strong><br>Before doing any actions on this service, please scroll down and read the admin notes!');
            }
        });
        </script>
        HTML;
    };
});
