pipeline {
    agent any
    stages {
        stage("Build") {
            agent {
                docker { image 'fritsstegmann/jenkins-build-php' }
            }
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
