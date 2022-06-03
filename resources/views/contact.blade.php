<x-layout>
    <section style="min-height: 50vh;" class="bg-palette-green py-12 grid place-items-center place-content-center gap-8">
        <h1 class="text-6xl text-center font-bold">Nous contacter</h1>


    </section>

    <section>
         <!-- Success message -->
            <!-- @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif -->




        <form action="{{ route('send-contact') }}" method="POST">
            @csrf
            @if (!Auth::check())
            <!-- si on est pas conncecté -->
            <label>Nom</label>
            <input type="text" name="name" id="name">

            <label>Email</label>
            <input type="email" name="email" id="email">

            <label>Téléphone</label>
            <input type="text" name="tel" id="tel">

            <label>Adresse</label>
            <input type="text" name="adress" id="adress">
            @endif
            <!-- si on est conncecté, envoyer les infos du user directement dans le formulaire -->

            <label>Message</label>
            <textarea name="message" id="message" rows="4"></textarea>





            <!--<input type="text" name="hello" id="">-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit">Evnoyer</button>
        </form>
    </section>
</x-layout>
