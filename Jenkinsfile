pipeline {
    agent any
    stages {
        stage("Build") {
            agent {
                docker { image 'fritsstegmann/jenkins-build-php' }
            }test new imagetest new image
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
            }
        }
        stage("Unit test") {
            steps {
                sh "./vendor/bin/phpunit   --filter=CalculatorTest"
            }
        }
    }
}
