set -e

echo "Deploying application...."

# Enter maintenance mode
(php artisan down --message 'The app is being (quickly!) updated. Please try again in a minute')
  # update codebase
  git pull origin master
# Exit maintenance mode
php artisan up

echo "Application deployed!"