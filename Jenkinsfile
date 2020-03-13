pipeline {
    agent any
    stages {
        stage("Composer install") {
            steps {
                sh 'composer install'
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit  --filter=CalculatorTest"
            }
        }
    }
}