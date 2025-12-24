import { ArrowRight, PhoneCall, TrendingUp, Users } from 'lucide-react';
import { Button } from '@/components/ui/button';

const Hero = () => {
  return (
    <section className="relative min-h-screen flex items-center pt-20 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-hero" />
      
      {/* Decorative elements */}
      <div className="absolute top-1/4 right-0 w-96 h-96 bg-secondary/20 rounded-full blur-3xl" />
      <div className="absolute bottom-0 left-0 w-80 h-80 bg-accent/10 rounded-full blur-3xl" />
      
      {/* Grid pattern overlay */}
      <div className="absolute inset-0 opacity-5" style={{
        backgroundImage: 'linear-gradient(hsl(0 0% 100%) 1px, transparent 1px), linear-gradient(90deg, hsl(0 0% 100%) 1px, transparent 1px)',
        backgroundSize: '50px 50px'
      }} />

      <div className="container mx-auto px-4 relative z-10">
        <div className="max-w-4xl">
          {/* Badge */}
          <div className="inline-flex items-center gap-2 bg-primary-foreground/10 backdrop-blur-sm border border-primary-foreground/20 rounded-full px-4 py-2 mb-8 animate-slide-up">
            <span className="w-2 h-2 rounded-full bg-accent animate-pulse" />
            <span className="text-primary-foreground/90 text-sm font-medium">
              Trusted BPO Partner for Growing Businesses
            </span>
          </div>

          {/* Headline */}
          <h1 className="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-heading font-extrabold text-primary-foreground leading-tight mb-6 animate-slide-up animation-delay-100">
            Transform Your{' '}
            <span className="relative">
              <span className="text-accent">Leads</span>
              <svg className="absolute -bottom-2 left-0 w-full" viewBox="0 0 200 12" fill="none">
                <path d="M2 8C50 2 150 2 198 8" stroke="hsl(var(--accent))" strokeWidth="4" strokeLinecap="round" />
              </svg>
            </span>
            <br />
            Into Revenue
          </h1>

          <p className="text-lg sm:text-xl text-primary-foreground/80 max-w-2xl mb-10 animate-slide-up animation-delay-200">
            MadXventure is your dedicated BPO partner. We specialize in cold calling, 
            lead generation, and appointment setting to accelerate your business growth 
            and boost your sales pipeline.
          </p>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 mb-16 animate-slide-up animation-delay-300">
            <Button variant="hero" size="xl" asChild>
              <a href="#contact" className="gap-3">
                Start Growing Today
                <ArrowRight className="h-5 w-5" />
              </a>
            </Button>
            <Button variant="heroOutline" size="xl" asChild>
              <a href="#services">
                Explore Our Services
              </a>
            </Button>
          </div>

          {/* Stats */}
          <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 animate-slide-up animation-delay-400">
            <div className="flex items-center gap-4 bg-primary-foreground/5 backdrop-blur-sm rounded-xl p-4 border border-primary-foreground/10">
              <div className="w-12 h-12 rounded-lg bg-accent/20 flex items-center justify-center">
                <PhoneCall className="h-6 w-6 text-accent" />
              </div>
              <div>
                <p className="text-2xl font-heading font-bold text-primary-foreground">50K+</p>
                <p className="text-primary-foreground/70 text-sm">Calls Made Monthly</p>
              </div>
            </div>
            
            <div className="flex items-center gap-4 bg-primary-foreground/5 backdrop-blur-sm rounded-xl p-4 border border-primary-foreground/10">
              <div className="w-12 h-12 rounded-lg bg-secondary/30 flex items-center justify-center">
                <TrendingUp className="h-6 w-6 text-sky-light" />
              </div>
              <div>
                <p className="text-2xl font-heading font-bold text-primary-foreground">35%</p>
                <p className="text-primary-foreground/70 text-sm">Avg. Conversion Rate</p>
              </div>
            </div>
            
            <div className="flex items-center gap-4 bg-primary-foreground/5 backdrop-blur-sm rounded-xl p-4 border border-primary-foreground/10">
              <div className="w-12 h-12 rounded-lg bg-accent/20 flex items-center justify-center">
                <Users className="h-6 w-6 text-accent" />
              </div>
              <div>
                <p className="text-2xl font-heading font-bold text-primary-foreground">200+</p>
                <p className="text-primary-foreground/70 text-sm">Happy Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Scroll indicator */}
      <div className="absolute bottom-8 left-1/2 -translate-x-1/2 animate-float">
        <div className="w-6 h-10 rounded-full border-2 border-primary-foreground/30 flex items-start justify-center p-2">
          <div className="w-1.5 h-3 rounded-full bg-primary-foreground/50 animate-pulse" />
        </div>
      </div>
    </section>
  );
};

export default Hero;
