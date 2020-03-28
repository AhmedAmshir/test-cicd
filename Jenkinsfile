pipeline {
    agent any
    stages {
        stage("Composer check first") {
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
