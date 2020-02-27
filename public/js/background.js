Particles.init({
    selector: '.background',
    color:'#fbf8ff',
    maxParticles: 200,
    connectParticles: true,
    responsive: [
        {
            breakpoint: 768,
            options: {
                maxParticles: 200,
                color: '#48F2E3',
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
                maxParticles: 0
            }
        }
    ]
});
