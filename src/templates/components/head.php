<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="<?php echo BASE_URL;?>/src/js/navbar.js"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                yellow: '#F9ED69', 
                orange: '#F08A5D',
                maroon: '#B83B5E',
                purple: '#6A2C70',
                grey: '#FCFCFC',
                red: '#ff0000',
              }
            }
          }
        }
    </script>
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/img/logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
</head>