@props(['title' => 'Modifica Profilo'])

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">{{ $title }}</h2>
<<<<<<< HEAD
<<<<<<< HEAD

    <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Informazioni Personali -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Informazioni Personali</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text"
                           name="name"
                           id="name"
=======
    
=======

>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Informazioni Personali -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Informazioni Personali</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
<<<<<<< HEAD
                    <input type="text" 
                           name="name" 
                           id="name" 
>>>>>>> 54f4fa16 (.)
=======
                    <input type="text"
                           name="name"
                           id="name"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('name', $user->name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Cognome</label>
                    <input type="text"
                           name="last_name"
                           id="last_name"
                           value="{{ old('last_name', $user->last_name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email"
                           name="email"
                           id="email"
=======
                
=======

>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Cognome</label>
                    <input type="text"
                           name="last_name"
                           id="last_name"
                           value="{{ old('last_name', $user->last_name) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('last_name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
<<<<<<< HEAD
                    <input type="email" 
                           name="email" 
                           id="email" 
>>>>>>> 54f4fa16 (.)
=======
                    <input type="email"
                           name="email"
                           id="email"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('email', $user->email) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
                    <input type="tel"
                           name="phone"
                           id="phone"
=======
                
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
                    <input type="tel" 
                           name="phone" 
                           id="phone" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
                    <input type="tel"
                           name="phone"
                           id="phone"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('phone', $user->phone) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('phone')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="birth_date" class="block text-sm font-medium text-gray-700">Data di Nascita</label>
                    <input type="date"
                           name="birth_date"
                           id="birth_date"
=======
                
                <div>
                    <label for="birth_date" class="block text-sm font-medium text-gray-700">Data di Nascita</label>
                    <input type="date" 
                           name="birth_date" 
                           id="birth_date" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="birth_date" class="block text-sm font-medium text-gray-700">Data di Nascita</label>
                    <input type="date"
                           name="birth_date"
                           id="birth_date"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('birth_date', $user->birth_date->format('Y-m-d')) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('birth_date')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="fiscal_code" class="block text-sm font-medium text-gray-700">Codice Fiscale</label>
                    <input type="text"
                           name="fiscal_code"
                           id="fiscal_code"
=======
                
                <div>
                    <label for="fiscal_code" class="block text-sm font-medium text-gray-700">Codice Fiscale</label>
                    <input type="text" 
                           name="fiscal_code" 
                           id="fiscal_code" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="fiscal_code" class="block text-sm font-medium text-gray-700">Codice Fiscale</label>
                    <input type="text"
                           name="fiscal_code"
                           id="fiscal_code"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('fiscal_code', $user->fiscal_code) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('fiscal_code')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD

        <!-- Indirizzo -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Indirizzo</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="street" class="block text-sm font-medium text-gray-700">Via</label>
                    <input type="text"
                           name="address[street]"
                           id="street"
=======
        
=======

>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
        <!-- Indirizzo -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Indirizzo</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="street" class="block text-sm font-medium text-gray-700">Via</label>
<<<<<<< HEAD
                    <input type="text" 
                           name="address[street]" 
                           id="street" 
>>>>>>> 54f4fa16 (.)
=======
                    <input type="text"
                           name="address[street]"
                           id="street"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('address.street', $user->address->street) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('address.street')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">Città</label>
                    <input type="text"
                           name="address[city]"
                           id="city"
=======
                
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">Città</label>
                    <input type="text" 
                           name="address[city]" 
                           id="city" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">Città</label>
                    <input type="text"
                           name="address[city]"
                           id="city"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('address.city', $user->address->city) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('address.city')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="province" class="block text-sm font-medium text-gray-700">Provincia</label>
                    <input type="text"
                           name="address[province]"
                           id="province"
=======
                
                <div>
                    <label for="province" class="block text-sm font-medium text-gray-700">Provincia</label>
                    <input type="text" 
                           name="address[province]" 
                           id="province" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="province" class="block text-sm font-medium text-gray-700">Provincia</label>
                    <input type="text"
                           name="address[province]"
                           id="province"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('address.province', $user->address->province) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('address.province')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">CAP</label>
                    <input type="text"
                           name="address[postal_code]"
                           id="postal_code"
=======
                
                <div>
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">CAP</label>
                    <input type="text" 
                           name="address[postal_code]" 
                           id="postal_code" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">CAP</label>
                    <input type="text"
                           name="address[postal_code]"
                           id="postal_code"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('address.postal_code', $user->address->postal_code) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('address.postal_code')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD

        <!-- Informazioni Mediche -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Informazioni Mediche</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="primary_doctor" class="block text-sm font-medium text-gray-700">Medico di Base</label>
                    <input type="text"
                           name="medical_info[primary_doctor]"
                           id="primary_doctor"
=======
        
=======

>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
        <!-- Informazioni Mediche -->
        <div>
            <h3 class="text-lg font-medium text-gray-900 mb-4">Informazioni Mediche</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="primary_doctor" class="block text-sm font-medium text-gray-700">Medico di Base</label>
<<<<<<< HEAD
                    <input type="text" 
                           name="medical_info[primary_doctor]" 
                           id="primary_doctor" 
>>>>>>> 54f4fa16 (.)
=======
                    <input type="text"
                           name="medical_info[primary_doctor]"
                           id="primary_doctor"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                           value="{{ old('medical_info.primary_doctor', $user->medical_info->primary_doctor) }}"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('medical_info.primary_doctor')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="blood_type" class="block text-sm font-medium text-gray-700">Gruppo Sanguigno</label>
                    <select name="medical_info[blood_type]"
=======
                
                <div>
                    <label for="blood_type" class="block text-sm font-medium text-gray-700">Gruppo Sanguigno</label>
                    <select name="medical_info[blood_type]" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="blood_type" class="block text-sm font-medium text-gray-700">Gruppo Sanguigno</label>
                    <select name="medical_info[blood_type]"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                            id="blood_type"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        <option value="">Seleziona gruppo sanguigno</option>
                        <option value="A+" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'A+' ? 'selected' : '' }}>A+</option>
                        <option value="A-" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'A-' ? 'selected' : '' }}>A-</option>
                        <option value="B+" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'B+' ? 'selected' : '' }}>B+</option>
                        <option value="B-" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'B-' ? 'selected' : '' }}>B-</option>
                        <option value="AB+" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'AB+' ? 'selected' : '' }}>AB+</option>
                        <option value="AB-" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'AB-' ? 'selected' : '' }}>AB-</option>
                        <option value="O+" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'O+' ? 'selected' : '' }}>O+</option>
                        <option value="O-" {{ old('medical_info.blood_type', $user->medical_info->blood_type) === 'O-' ? 'selected' : '' }}>O-</option>
                    </select>
                    @error('medical_info.blood_type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="allergies" class="block text-sm font-medium text-gray-700">Allergie</label>
                    <textarea name="medical_info[allergies]"
=======
                
                <div>
                    <label for="allergies" class="block text-sm font-medium text-gray-700">Allergie</label>
                    <textarea name="medical_info[allergies]" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="allergies" class="block text-sm font-medium text-gray-700">Allergie</label>
                    <textarea name="medical_info[allergies]"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                              id="allergies"
                              rows="3"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ old('medical_info.allergies', $user->medical_info->allergies) }}</textarea>
                    @error('medical_info.allergies')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
<<<<<<< HEAD
<<<<<<< HEAD

                <div>
                    <label for="chronic_conditions" class="block text-sm font-medium text-gray-700">Patologie Croniche</label>
                    <textarea name="medical_info[chronic_conditions]"
=======
                
                <div>
                    <label for="chronic_conditions" class="block text-sm font-medium text-gray-700">Patologie Croniche</label>
                    <textarea name="medical_info[chronic_conditions]" 
>>>>>>> 54f4fa16 (.)
=======

                <div>
                    <label for="chronic_conditions" class="block text-sm font-medium text-gray-700">Patologie Croniche</label>
                    <textarea name="medical_info[chronic_conditions]"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                              id="chronic_conditions"
                              rows="3"
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">{{ old('medical_info.chronic_conditions', $user->medical_info->chronic_conditions) }}</textarea>
                    @error('medical_info.chronic_conditions')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
<<<<<<< HEAD
<<<<<<< HEAD

        <!-- Azioni -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('profile.show') }}"
               class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Annulla
            </a>

            <button type="submit"
=======
        
=======

>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
        <!-- Azioni -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('profile.show') }}"
               class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Annulla
            </a>
<<<<<<< HEAD
            
            <button type="submit" 
>>>>>>> 54f4fa16 (.)
=======

            <button type="submit"
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                Salva Modifiche
            </button>
        </div>
    </form>
<<<<<<< HEAD
<<<<<<< HEAD
</div>
=======
</div> 
>>>>>>> 54f4fa16 (.)
=======
</div>
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
