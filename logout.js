
import React, { useEffect } from 'react';
import { Button } from '@/components/ui/button';
import { useRouter } from 'next/navigation'; // Corrected import

const LoginPage = () => {
  const router = useRouter();

  useEffect(() => {
    // Check for localStorage on the client-side
    if (typeof window !== 'undefined') {
        const isLoggedIn = localStorage.getItem('isLoggedIn');

        // If the user is logged in, redirect them to the home page.
        if (isLoggedIn === 'true') {
            router.push('/home'); // Corrected usage
        }

        // Prevent back button from accessing this page after logout
        window.history.pushState(null, '', window.location.href);
        window.onpopstate = () => {
          router.push('/login'); // Corrected usage
        };
    }
  }, [router]);

  const handleLogin = () => {
    // Simulate login
    if (typeof window !== 'undefined'){
        localStorage.setItem('isLoggedIn', 'true');
        router.push('/home');
    }
  };

  return (
    <div className="flex items-center justify-center h-screen bg-gray-100">
      <div className="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 className="text-2xl font-semibold mb-6 text-center">Login</h1>
        <Button
          onClick={handleLogin}
          className="w-full"
          variant="default" // Added variant for consistent styling
        >
          Login
        </Button>
      </div>
    </div>
  );
};

const HomePage = () => {
    const router = useRouter();

    useEffect(() => {
         if (typeof window !== 'undefined'){
            const isLoggedIn = localStorage.getItem('isLoggedIn');
            if (isLoggedIn !== 'true') {
                router.push('/login');
            }
         }
    }, [router]);

    const handleLogout = () => {
        if (typeof window !== 'undefined'){
            localStorage.removeItem('isLoggedIn');
            router.push('/login');
        }
    };

    return (
        <div className="flex items-center justify-center h-screen bg-gray-100">
            <div className="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
                <h1 className="text-2xl font-semibold mb-6 text-center">Home Page</h1>
                <p className="text-gray-700 mb-4">You are now logged in!</p>
                <Button onClick={handleLogout} className="w-full" variant="destructive">
                    Logout
                </Button>
            </div>
        </div>
    );
};

// Wrap the App component with the necessary providers
const App = () => {
  const [route, setRoute] = React.useState('/login');

    useEffect(() => {
        const handleRouteChange = (url: string) => {
            setRoute(url);
        };

        // Simple routing for demonstration
        const onRouteChange = (newRoute: string) => {
          setRoute(newRoute);
        }

        // Initial route
        onRouteChange(window.location.pathname);

        // Basic routing
        const handleNavigation = (e: PopStateEvent) => {
            onRouteChange(window.location.pathname);
        }

        window.addEventListener('popstate', handleNavigation);

        return () => {
            window.removeEventListener('popstate', handleNavigation);
        };
    }, []);

    let content;
    switch (route) {
        case '/login':
            content = <LoginPage />;
            break;
        case '/home':
            content = <HomePage />;
            break;
        default:
            content = <LoginPage />;
    }

    return (
        <>
            {content}
        </>
    );
};

export default App;
