import { Phone, Target, Calendar, HeadphonesIcon, BarChart3, Users } from 'lucide-react';

const services = [
  {
    icon: Phone,
    title: 'Cold Calling',
    description: 'Expert cold calling campaigns that connect you with potential customers. Our trained agents engage prospects professionally to generate interest in your products and services.',
    color: 'accent',
  },
  {
    icon: Target,
    title: 'Lead Generation',
    description: 'Data-driven lead generation strategies that identify and qualify high-potential prospects. We fill your sales pipeline with leads ready for conversion.',
    color: 'secondary',
  },
  {
    icon: Calendar,
    title: 'Appointment Setting',
    description: 'Seamless appointment scheduling with qualified leads. We book meetings with decision-makers so your sales team can focus on closing deals.',
    color: 'accent',
  },
  {
    icon: HeadphonesIcon,
    title: 'Customer Support',
    description: 'Professional customer support services that enhance satisfaction and retention. We handle inquiries, resolve issues, and build lasting relationships.',
    color: 'secondary',
  },
  {
    icon: BarChart3,
    title: 'Sales Support',
    description: 'Comprehensive sales support including follow-ups, CRM management, and pipeline tracking. We help your sales team stay organized and efficient.',
    color: 'accent',
  },
  {
    icon: Users,
    title: 'Market Research',
    description: 'In-depth market research and surveys to understand your audience. We gather actionable insights to inform your business strategy.',
    color: 'secondary',
  },
];

const Services = () => {
  return (
    <section id="services" className="py-24 bg-background relative overflow-hidden">
      {/* Decorative background */}
      <div className="absolute top-0 right-0 w-1/2 h-1/2 bg-muted/50 rounded-bl-[200px]" />
      
      <div className="container mx-auto px-4 relative z-10">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <span className="inline-block text-secondary font-semibold text-sm uppercase tracking-wider mb-4">
            What We Offer
          </span>
          <h2 className="text-3xl sm:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-6">
            Services That{' '}
            <span className="text-gradient-hero">Drive Results</span>
          </h2>
          <p className="text-muted-foreground text-lg">
            From initial outreach to closing deals, we provide end-to-end BPO solutions 
            that accelerate your business growth.
          </p>
        </div>

        {/* Services Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div
              key={service.title}
              className="group bg-card rounded-2xl p-8 shadow-md hover:shadow-lg transition-all duration-300 border border-border hover:border-secondary/30 hover:-translate-y-1"
              style={{ animationDelay: `${index * 100}ms` }}
            >
              <div className={`w-14 h-14 rounded-xl flex items-center justify-center mb-6 transition-transform duration-300 group-hover:scale-110 ${
                service.color === 'accent' 
                  ? 'bg-accent/10 text-accent' 
                  : 'bg-secondary/10 text-secondary'
              }`}>
                <service.icon className="h-7 w-7" />
              </div>
              
              <h3 className="text-xl font-heading font-bold text-foreground mb-3 group-hover:text-secondary transition-colors">
                {service.title}
              </h3>
              
              <p className="text-muted-foreground leading-relaxed">
                {service.description}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
