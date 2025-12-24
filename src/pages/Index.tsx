import { Helmet } from 'react-helmet-async';
import Header from '@/components/layout/Header';
import Hero from '@/components/sections/Hero';
import Services from '@/components/sections/Services';
import About from '@/components/sections/About';
import Results from '@/components/sections/Results';
import Contact from '@/components/sections/Contact';
import Footer from '@/components/layout/Footer';

const Index = () => {
  return (
    <>
      <Helmet>
        <title>MadXventure | BPO Services - Cold Calling, Lead Generation & Appointment Setting</title>
        <meta 
          name="description" 
          content="MadXventure is your trusted BPO partner for cold calling, lead generation, and appointment setting. Boost your business success with our professional services." 
        />
        <meta name="keywords" content="BPO, cold calling, lead generation, appointment setting, sales support, customer support, business growth" />
        <link rel="canonical" href="https://madxventure.com" />
        
        {/* Open Graph */}
        <meta property="og:title" content="MadXventure | Boosting Business Success" />
        <meta property="og:description" content="Transform your leads into revenue with MadXventure's professional BPO services." />
        <meta property="og:type" content="website" />
        
        {/* Schema.org */}
        <script type="application/ld+json">
          {JSON.stringify({
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "MadXventure",
            "description": "BPO company specializing in cold calling, lead generation, and appointment setting",
            "url": "https://madxventure.com",
            "contactPoint": {
              "@type": "ContactPoint",
              "telephone": "+1-234-567-890",
              "contactType": "customer service"
            }
          })}
        </script>
      </Helmet>

      <div className="min-h-screen">
        <Header />
        <main>
          <Hero />
          <Services />
          <About />
          <Results />
          <Contact />
        </main>
        <Footer />
      </div>
    </>
  );
};

export default Index;
