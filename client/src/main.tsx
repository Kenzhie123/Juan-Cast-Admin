import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './styles/global.css';
import Login from './pages/Login/Login.tsx'



createRoot(document.getElementById('root')!).render(
  <StrictMode>
    <Login />
  </StrictMode>,
)
