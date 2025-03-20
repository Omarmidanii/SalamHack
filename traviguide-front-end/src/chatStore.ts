import { create } from "zustand";

interface chatStore {
  chat: { role: string; content: string }[];
  setChat: (message: { role: string; content: string } | undefined) => void;
}

const chatStore = create<chatStore>()((set) => ({
  chat: [],
  setChat: (message) =>
    set((state) => ({
      chat:
        message == undefined
          ? state.chat
          : state.chat
          ? [...state.chat, message]
          : [message],
    })),
}));

export default chatStore;
