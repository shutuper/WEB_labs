package com.example.springapp.repos.sasha;

import com.example.springapp.models.sasha.Presenter;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface PresenterRepo extends JpaRepository<Presenter,Long> {
}
