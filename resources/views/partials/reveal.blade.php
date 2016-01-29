<script>
  var mode = $('body').attr('data-mode');
  var websocketsAddress = $('body').attr('data-websockets-address');

  var revealConfig = {
      controls: false,
      progress: true,
      history: false,
      keyboard: false,
      overview: true,
      touch: false,
      center: true,
      autoSlideStoppable: false,
      help: false,
      slideNumber: false,
      transition: 'slide', // none/fade/slide/convex/concave/zoom

      // Optional reveal.js plugins
      dependencies: [
          { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
          { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
          { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
          { src: 'js/code.min.js', async: true },
          { src: 'plugin/zoom-js/zoom.js', async: true }
          //{ src: 'plugin/notes/notes.js', async: true }
      ],

      multiplex: {
          secret: 'issoehumsegredo',
          id: 'nossaqueidlegal',
          url: websocketsAddress
      },
  };

  if (mode == 'presenter') {
      revealConfig.controls = true;
      revealConfig.keyboard = true;
      revealConfig.touch = true;
      revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/master.js', async: true });
      revealConfig.dependencies.push({ src: 'plugin/notes/notes.js', async: true });
  } else {
      revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
  }

  // Full list of configuration options available at:
  // https://github.com/hakimel/reveal.js#configuration
  Reveal.initialize(revealConfig);
</script>