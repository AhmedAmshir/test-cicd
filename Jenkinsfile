pipeline {
    agent any
    stages {
        stage("Build") {
            agent {
                docker { image 'php' }
            }
            steps {
                sh 'php --version'
                sh 'curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer'
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