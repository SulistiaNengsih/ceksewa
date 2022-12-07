<?php
    namespace kel6pbpu\ceksewa\console;

    use Illuminate\Console\GeneratorCommand;
    use Illuminate\Support\Facades\DB;
    
    class MakeConcreteBuilderCommand extends GeneratorCommand
    {
        protected $name = 'make:concrete-builder';
    
        protected $description = 'Create a new concrete builder';
    
        protected $type = 'Concrete Builder';
    
        protected function getStub()
        {
            return __DIR__ . '/stubs/concreteBuilder.php.stub';
        }
    
        protected function getDefaultNamespace($rootNamespace)
        {
            return $rootNamespace . '\ceksewa\builder\concrete_builder';
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

            DB::table('builder')->insert([
                'nama' => $this->getNameInput()
            ]);
    
            // get the destination path, based on the default namespace
            $path = $this->getPath($class);
    
            $content = file_get_contents($path);
    
            // Update the file content with additional data (regular expressions)
            file_put_contents($path, $content);
        }
    }
?>