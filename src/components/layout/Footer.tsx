import { Phone, Mail, Linkedin, Twitter, Facebook } from 'lucide-react';
import logo from '@/assets/madxventure-logo.png';

const Footer = () => {
  const currentYear = new Date().getFullYear();

  const quickLinks = [
    { href: '#services', label: 'Services' },
    { href: '#about', label: 'About Us' },
    { href: '#results', label: 'Results' },
    { href: '#contact', label: 'Contact' },
  ];

  const services = [
    'Cold Calling',
    'Lead Generation',
    'Appointment Setting',
    'Customer Support',
    'Sales Support',
    'Market Research',
  ];

  return (
    <footer className="bg-primary text-primary-foreground pt-16 pb-8">
      <div className="container mx-auto px-4">
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
          {/* Company Info */}
          <div className="lg:col-span-1">
            <img 
              src={logo} 
              alt="MadXventure" 
              className="h-12 w-auto mb-4 brightness-0 invert"
            />
            <p className="text-primary-foreground/70 text-sm leading-relaxed mb-6">
              MadXventure is your trusted BPO partner dedicated to helping 
              businesses grow through professional cold calling, lead generation, 
              and appointment setting services.
            </p>
            <div className="flex items-center gap-4">
              <a 
                href="#" 
                className="w-10 h-10 rounded-lg bg-primary-foreground/10 flex items-center justify-center hover:bg-secondary transition-colors"
                aria-label="LinkedIn"
              >
                <Linkedin className="h-5 w-5" />
              </a>
              <a 
                href="#" 
                className="w-10 h-10 rounded-lg bg-primary-foreground/10 flex items-center justify-center hover:bg-secondary transition-colors"
                aria-label="Twitter"
              >
                <Twitter className="h-5 w-5" />
              </a>
              <a 
                href="#" 
                className="w-10 h-10 rounded-lg bg-primary-foreground/10 flex items-center justify-center hover:bg-secondary transition-colors"
                aria-label="Facebook"
              >
                <Facebook className="h-5 w-5" />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-lg font-heading font-bold mb-6">Quick Links</h4>
            <ul className="space-y-3">
              {quickLinks.map((link) => (
                <li key={link.href}>
                  <a 
                    href={link.href}
                    className="text-primary-foreground/70 hover:text-accent transition-colors"
                  >
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Services */}
          <div>
            <h4 className="text-lg font-heading font-bold mb-6">Our Services</h4>
            <ul className="space-y-3">
              {services.map((service) => (
                <li key={service}>
                  <a 
                    href="#services"
                    className="text-primary-foreground/70 hover:text-accent transition-colors"
                  >
                    {service}
                  </a>
                </li>
              ))}
            </ul>
          </div>

          {/* Contact */}
          <div>
            <h4 className="text-lg font-heading font-bold mb-6">Contact Us</h4>
            <ul className="space-y-4">
              <li>
                <a 
                  href="mailto:info@madxventure.com"
                  className="flex items-center gap-3 text-primary-foreground/70 hover:text-accent transition-colors"
                >
                  <Mail className="h-5 w-5" />
                  info@madxventure.com
                </a>
              </li>
              <li>
                <a 
                  href="tel:+1234567890"
                  className="flex items-center gap-3 text-primary-foreground/70 hover:text-accent transition-colors"
                >
                  <Phone className="h-5 w-5" />
                  +1 (234) 567-890
                </a>
              </li>
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="pt-8 border-t border-primary-foreground/10">
          <div className="flex flex-col md:flex-row justify-between items-center gap-4">
            <p className="text-primary-foreground/60 text-sm">
              © {currentYear} MadXventure. All rights reserved.
            </p>
            <div className="flex items-center gap-6 text-sm">
              <a href="#" className="text-primary-foreground/60 hover:text-accent transition-colors">
                Privacy Policy
              </a>
              <a href="#" className="text-primary-foreground/60 hover:text-accent transition-colors">
                Terms of Service
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
