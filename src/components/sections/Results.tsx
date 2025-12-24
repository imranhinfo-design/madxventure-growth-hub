import { TrendingUp, Phone, Calendar, Users, Clock, Award } from 'lucide-react';

const stats = [
  {
    icon: Phone,
    value: '500K+',
    label: 'Calls Made',
    description: 'Successful outreach calls annually',
  },
  {
    icon: Calendar,
    value: '15K+',
    label: 'Appointments Set',
    description: 'Qualified meetings booked',
  },
  {
    icon: TrendingUp,
    value: '35%',
    label: 'Avg. Conversion',
    description: 'Lead to appointment rate',
  },
  {
    icon: Users,
    value: '200+',
    label: 'Happy Clients',
    description: 'Businesses we\'ve helped grow',
  },
  {
    icon: Clock,
    value: '24/7',
    label: 'Support',
    description: 'Round-the-clock availability',
  },
  {
    icon: Award,
    value: '98%',
    label: 'Client Satisfaction',
    description: 'Based on client feedback',
  },
];

const Results = () => {
  return (
    <section id="results" className="py-24 bg-gradient-hero relative overflow-hidden">
      {/* Decorative elements */}
      <div className="absolute top-0 left-1/4 w-64 h-64 bg-secondary/20 rounded-full blur-3xl" />
      <div className="absolute bottom-0 right-1/4 w-80 h-80 bg-accent/10 rounded-full blur-3xl" />

      {/* Grid pattern */}
      <div className="absolute inset-0 opacity-5" style={{
        backgroundImage: 'radial-gradient(circle, hsl(0 0% 100%) 1px, transparent 1px)',
        backgroundSize: '30px 30px'
      }} />

      <div className="container mx-auto px-4 relative z-10">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <span className="inline-block text-accent font-semibold text-sm uppercase tracking-wider mb-4">
            Proven Results
          </span>
          <h2 className="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-6">
            Numbers That Speak for Themselves
          </h2>
          <p className="text-primary-foreground/80 text-lg">
            Our track record demonstrates our commitment to delivering measurable 
            results for every client we partner with.
          </p>
        </div>

        {/* Stats Grid */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {stats.map((stat, index) => (
            <div
              key={stat.label}
              className="bg-primary-foreground/10 backdrop-blur-sm border border-primary-foreground/20 rounded-2xl p-8 text-center hover:bg-primary-foreground/15 transition-all duration-300 group"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              <div className="w-14 h-14 rounded-xl bg-accent/20 flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                <stat.icon className="h-7 w-7 text-accent" />
              </div>
              
              <p className="text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-2">
                {stat.value}
              </p>
              <p className="text-lg font-semibold text-primary-foreground/90 mb-1">
                {stat.label}
              </p>
              <p className="text-primary-foreground/60 text-sm">
                {stat.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Results;
