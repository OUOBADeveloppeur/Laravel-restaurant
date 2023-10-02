<x-guest-layout>
    <!--- formulaire pour ajouter un restaurant-->
    <form method="POST" action="{{ route('store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="logo" :value="__('Logo')" />
            <x-text-input id="name" class="block mt-2 w-full" type="file" name="logo" :value="old('logo')" required autofocus />
            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="Nom" :value="__('Nom du Restaurant')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="pays" :value="__('Pays')" />
            <x-text-input id="pays" class="block mt-1 w-full" type="text" name="pays" :value="old('pays')" required autofocus />
            <x-input-error :messages="$errors->get('pays')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="ville" :value="__('ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>
        

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="cartier" :value="__('Cartier')" />
            <x-text-input id="cartier" class="block mt-1 w-full" type="text" name="cartier" :value="old('cartier')" required />
            <x-input-error :messages="$errors->get('cartier')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="email" :value="__('Mail du Responsable')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        

        <!-- Confirm Password -->
        

        <div class="flex items-center justify-end mt-4">
           

            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
            
            <footer class="main-footer">
           

               <div class="text-center ">
                  <p> &copy; Copyright {{ date('Y') }}  &middot;Ma solution. Tout droit reservé </p>
    
                </div>
            </footer>
</body>
</html>