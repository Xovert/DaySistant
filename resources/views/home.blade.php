@extends('layout.layout')
@section('title','Landing Page')
@section('style')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection

@section('content')
    <section id="main">
        <h1>Boost Your Productivity and<br>Work Quality with DaySistant</h1>
    </section>
    <section id="about-us">
        <div class="about-image">
            <img src="{{asset('assets/website-management-as-a-VA 1.png')}}" alt="about-us">
        </div>
        <div class="about-content">
            <h1>About Us</h1>
            <div class="about-text">
                <p class="the-bold-one">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi hic impedit placeat exercitationem corporis assumenda alias saepe harum praesentium. Earum temporibus nemo maiores cum illum assumenda amet iure reiciendis quibusdam.</p>
                <p class="normal-one">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi repellat, possimus ullam explicabo sapiente reprehenderit quis excepturi quibusdam a sequi quo quod, in, suscipit deserunt eius at neque non exercitationem. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem a maiores iste beatae quae, quod ipsam perferendis, animi vitae blanditiis vel fugit aperiam ratione, nemo accusamus ipsa ducimus eveniet cumque?</p>
            </div>
        </div>
    </section>
    <section id="why">
        <h1>Why DaySistant ?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aut corrupti harum voluptate commodi laborum adipisci voluptatibus rem fugit obcaecati possimus praesentium eaque, repellat nihil, numquam ad nam eius soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quo, dolorem, possimus dignissimos, velit impedit quos blanditiis molestias cum praesentium aperiam in incidunt? Dicta minima, obcaecati molestiae beatae culpa quae.</p>
    </section>
    <section id="main-point">
        <div class="quality">
            <h1>Quality Assistant</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolore saepe nesciunt ad harum nostrum maxime ex, quaerat corrupti voluptate quidem neque repellendus voluptatum ipsa vel atque necessitatibus delectus eos? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur ab molestiae quo quaerat velit eum, atque sequi cumque iusto recusandae aperiam cupiditate ea assumenda saepe dicta nulla quibusdam ratione.</p>
        </div>
        <div class="convenience">
            <h1>Convenience</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolore saepe nesciunt ad harum nostrum maxime ex, quaerat corrupti voluptate quidem neque repellendus voluptatum ipsa vel atque necessitatibus delectus eos? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur ab molestiae quo quaerat velit eum, atque sequi cumque iusto recusandae aperiam cupiditate ea assumenda saepe dicta nulla quibusdam ratione.</p>
        </div>
        <div class="competitive">
            <h1>Competitive Price</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolore saepe nesciunt ad harum nostrum maxime ex, quaerat corrupti voluptate quidem neque repellendus voluptatum ipsa vel atque necessitatibus delectus eos? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus consequatur ab molestiae quo quaerat velit eum, atque sequi cumque iusto recusandae aperiam cupiditate ea assumenda saepe dicta nulla quibusdam ratione.</p>
        </div>
    </section>
    <section id="benefits">
        <div class="benefit-text">
            <h1>Benefits</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima sapiente iste aliquid dolores laudantium placeat, quia quo vel. Vel ex aut suscipit ullam, exercitationem ab animi possimus! Illo, laboriosam ducimus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid ullam ratione harum ad eaque molestias, eum facilis nisi culpa, ipsa cumque a fugit iure optio earum doloremque natus totam debitis.</p>
        </div>
        <div class="benefit-hexagon">
            <div class="hex-top">
                <div class="hex">
                    <img src="{{asset('assets/icon _clock_.png')}}" alt="icon">
                    <h3>Time Saving</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia tempore temporibus dolor totam nihil iusto, voluptates quibusdam odit</p>
                </div>
                <div class="hex">
                    <img src="{{asset('assets/icon _check alt_.png')}}" alt="icon">
                    <h3>Easy to use</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias a atque quas facere quod, ullam libero dicta maiores laboriosam</p>
                </div>
            </div>
            <div class="hex-bottom">
                <div class="hex">
                    <img src="{{asset('assets/icon _people_.png')}}" alt="icon">
                    <h3>Many Choices</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum, laborum beatae ullam debitis quam possimus ad, eos modi ipsa</p>
                </div>
            </div>
        </div>
    </section>
    <section id="location">
        <div class="location-kiri">
            <h3>Our Location</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At nulla reprehenderit rerum distinctio dolore, vero inventore nisi ullam officiis architecto iusto enim dignissimos! Inventore odit magni dolorem corporis corrupti laborum?</p>
        </div>
        <div class="location-kanan">
            <img src="{{asset('assets/icon _location pin_.png')}}" alt="">
        </div>
    </section>
@endsection