<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
    
</head>
<body>
    <div class="container mt-5">
        <h1>Ajouter un Étudiant</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('Etudiant.store') }}" class="container">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}">
                @error('nom')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}">
                @error('prenom')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Type de Bac</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bac_type" id="marocain" value="marocain" {{ old('bac_type') == 'marocain' ? 'checked' : '' }}>
                    <label class="form-check-label" for="marocain">Marocain</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bac_type" id="international" value="international" {{ old('bac_type') == 'international' ? 'checked' : '' }}>
                    <label class="form-check-label" for="international">International</label>
                </div>
                @error('bac_type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="filiere" class="form-label">Filière</label>
                <select name="filiere" id="filiere" class="form-control @error('filiere') is-invalid @enderror">
                    <option value="">Sélectionnez</option>
                    <option value="SMI" {{ old('filiere') == 'SMI' ? 'selected' : '' }}>SMI</option>
                    <option value="SMA" {{ old('filiere') == 'SMA' ? 'selected' : '' }}>SMA</option>
                    <option value="SEG" {{ old('filiere') == 'SEG' ? 'selected' : '' }}>SEG</option>
                    <option value="PC" {{ old('filiere') == 'PC' ? 'selected' : '' }}>PC</option>
                </select>
                @error('filiere')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Ajouter l'etudiant</button>
        </form>
    </div>
</body>
</html>