import { CheckCircle2, Rocket, Shield, Zap } from 'lucide-react';
import { Button } from '@/components/ui/button';

const features = [
  'Experienced & trained calling agents',
  'Real-time reporting and analytics',
  'Customized scripts for your business',
  'Flexible and scalable solutions',
  'Quality assurance on every call',
  'Dedicated account management',
];

const About = () => {
  return (
    <section id="about" className="py-24 bg-muted/30 relative overflow-hidden">
      {/* Decorative elements */}
      <div className="absolute top-1/2 left-0 w-72 h-72 bg-secondary/5 rounded-full blur-3xl -translate-y-1/2" />
      <div className="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl" />

      <div className="container mx-auto px-4 relative z-10">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left Content */}
          <div>
            <span className="inline-block text-secondary font-semibold text-sm uppercase tracking-wider mb-4">
              Why MadXventure
            </span>
            <h2 className="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-6">
              Your Dedicated Partner in{' '}
              <span className="text-accent">Business Growth</span>
            </h2>
            <p className="text-muted-foreground text-lg mb-8 leading-relaxed">
              At MadXventure, we understand that every call counts. Our team of 
              skilled professionals is committed to representing your brand with 
              excellence, turning cold leads into warm opportunities.
            </p>

            {/* Feature List */}
            <div className="grid sm:grid-cols-2 gap-4 mb-10">
              {features.map((feature) => (
                <div key={feature} className="flex items-center gap-3">
                  <CheckCircle2 className="h-5 w-5 text-secondary flex-shrink-0" />
                  <span className="text-foreground">{feature}</span>
                </div>
              ))}
            </div>

            <Button variant="default" size="lg" asChild>
              <a href="#contact">Learn More About Us</a>
            </Button>
          </div>

          {/* Right Content - Value Cards */}
          <div className="grid sm:grid-cols-2 gap-6">
            <div className="bg-card rounded-2xl p-6 shadow-md border border-border hover:shadow-lg transition-shadow">
              <div className="w-12 h-12 rounded-xl bg-gradient-hero flex items-center justify-center mb-4">
                <Rocket className="h-6 w-6 text-primary-foreground" />
              </div>
              <h3 className="text-lg font-heading font-bold text-foreground mb-2">
                Fast Results
              </h3>
              <p className="text-muted-foreground text-sm">
                Quick onboarding and rapid campaign launches to get you results faster.
              </p>
            </div>

            <div className="bg-card rounded-2xl p-6 shadow-md border border-border hover:shadow-lg transition-shadow sm:mt-8">
              <div className="w-12 h-12 rounded-xl bg-gradient-accent flex items-center justify-center mb-4">
                <Zap className="h-6 w-6 text-accent-foreground" />
              </div>
              <h3 className="text-lg font-heading font-bold text-foreground mb-2">
                High Performance
              </h3>
              <p className="text-muted-foreground text-sm">
                Industry-leading conversion rates through proven methodologies.
              </p>
            </div>

            <div className="bg-card rounded-2xl p-6 shadow-md border border-border hover:shadow-lg transition-shadow">
              <div className="w-12 h-12 rounded-xl bg-gradient-sky flex items-center justify-center mb-4">
                <Shield className="h-6 w-6 text-secondary-foreground" />
              </div>
              <h3 className="text-lg font-heading font-bold text-foreground mb-2">
                Quality Assured
              </h3>
              <p className="text-muted-foreground text-sm">
                Rigorous QA processes ensure every interaction meets your standards.
              </p>
            </div>

            <div className="bg-gradient-hero rounded-2xl p-6 shadow-lg sm:mt-8">
              <p className="text-primary-foreground/80 text-sm mb-2">Trusted by</p>
              <p className="text-4xl font-heading font-bold text-primary-foreground mb-1">
                200+
              </p>
              <p className="text-primary-foreground/90 font-medium">
                Businesses Worldwide
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default About;
