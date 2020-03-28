pipeline {
    agent any
    stages {
        stage("Composer check first") {
            steps {
                sh 'curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer'
                sh 'composer install'
                sh 'composer --version'
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit  --filter=CalculatorTest"
            }
        }
    }
}
