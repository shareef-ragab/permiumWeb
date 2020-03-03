Particles.init({
    selector: '.background',
    color:'#fbf8ff',
    maxParticles: 190,
    connectParticles: true,
    responsive: [
        {
            breakpoint: 768,
            options: {
                maxParticles: 150,
                connectParticles: true
            }
        }, {
            breakpoint: 425,
            options: {
                maxParticles: 100,
                connectParticles: true
            }
        }, {
            breakpoint: 320,
            options: {
                maxParticles: 50
            }
        }
    ]
});
