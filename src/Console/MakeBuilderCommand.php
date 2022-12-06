<?php
    namespace kel6pbpu\ceksewa\Console;

    use Illuminate\Console\GeneratorCommand;
    
    class MakeBuilderCommand extends GeneratorCommand
    {
        protected $name = 'make:builder';
    
        protected $description = 'Create a new builder';
    
        protected $type = 'BuilderMotor';
    
        protected function getStub()
        {
            return __DIR__ . '/stubs/builder.php.stub';
        }
    
        protected function getDefaultNamespace($rootNamespace)
        {
            return $rootNamespace . '\ceksewa\Builder';
        }
    
        public function handle()
        {
            parent::handle();
    
            $this->doOtherOperations();
        }
    
        protected function doOtherOperations()
        {
            // Get the fully qualified class name (FQN)
            $class = $this->qualifyClass($this->getNameInput());
    
            // get the destination path, based on the default namespace
            $path = $this->getPath($class);
    
            $content = file_get_contents($path);
    
            // Update the file content with additional data (regular expressions)
    
            file_put_contents($path, $content);
        }
    }
?>